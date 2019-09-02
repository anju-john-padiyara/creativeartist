<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use App\Photo;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.index', compact('projects'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'project_title' => 'required',
            'project_description' => 'required',
            'banner_image' => 'required',
            'thumbnail_image' => 'required',
        ]);

        if($request->hasFile('thumbnail_image')){
            $thumbnail_image = $request->file('thumbnail_image');
            $thumbnail_image_pathname = $thumbnail_image->store('public/thumbnail');
            $imageInfo = getimagesize($request->file('thumbnail_image'));
            $arImages[0] = ['photo_pathname' => $thumbnail_image_pathname, 'photo_status' => 1, 'photo_width' => $imageInfo[0], 'photo_height' => $imageInfo[1]];
        }
        if($request->hasFile('banner_image')){
            $banner_image = $request->file('banner_image');
            $banner_image_pathname = $banner_image->store('public/banner');
            $imageInfo = getimagesize($request->file('banner_image'));
            $arImages[1] = ['photo_pathname' => $banner_image_pathname, 'photo_status' => 2, 'photo_width' => $imageInfo[0], 'photo_height' => $imageInfo[1]];
        }

        foreach ($request->project_image as $key => $project_image) {
            $imageInfo = getimagesize($project_image);
            $arImages[] = ['photo_pathname' => $project_image->store('public/project'), 'photo_status' => 3, 'photo_width' => $imageInfo[0], 'photo_height' => $imageInfo[1]];
        }

        $project = new Project;
        $project->project_title = $request->project_title;
        $project->project_pathname = self::slugify($request->project_title);;
        $project->project_description = $request->project_description;
        $project->about_client = $request->about_client;
        $project->project_link = $request->project_link;
        $project->save(); 
 
        $project_id = $project->id;

        foreach ($arImages as $key => $image) {
            $photo = new Photo;
            $photo->project_id = $project_id;
            $photo->photo_pathname = $image['photo_pathname'];
            $photo->photo_width = $image['photo_width'];
            $photo->photo_height = $image['photo_height'];
            $photo->photo_status = $image['photo_status'];
            $photo->save(); 
        }
        return redirect(route('project.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thumbnail_image =  Project::find($id)->photos->where('photo_status', 1)->first();
        $banner_image =  Project::find($id)->photos->where('photo_status', 2)->first();
        $project_photos =  Project::find($id)->photos->where('photo_status', 3);
        $project =  Project::where('id', $id)->first();
        //return compact('thumbnail_image', 'banner_image', 'project_photos', 'project');
        return view('admin.edit', compact('thumbnail_image', 'banner_image', 'project_photos', 'project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'project_title' => 'required',
            'project_description' => 'required',
        ]);

        $arImages = [];
        if($request->hasFile('thumbnail_image')){
            Photo::where('project_id', $id)->where('photo_status', 1)->delete();
            $thumbnail_image = $request->file('thumbnail_image');
            $thumbnail_image_pathname = $thumbnail_image->store('public/thumbnail');
            $imageInfo = getimagesize($request->file('thumbnail_image'));
            $arImages[] = ['photo_pathname' => $thumbnail_image_pathname, 'photo_status' => 1, 'photo_width' => $imageInfo[0], 'photo_height' => $imageInfo[1]];
        }
        if($request->hasFile('banner_image')){
            Photo::where('project_id', $id)->where('photo_status', 2)->delete();
            $banner_image = $request->file('banner_image');
            $banner_image_pathname = $banner_image->store('public/banner');
            $imageInfo = getimagesize($request->file('banner_image'));
            $arImages[] = ['photo_pathname' => $banner_image_pathname, 'photo_status' => 2, 'photo_width' => $imageInfo[0], 'photo_height' => $imageInfo[1]];
        }
        if ($request->delete_image) {
            foreach ($request->delete_image as $dltImageId) {
               Photo::where('id', $dltImageId)->delete();
            }
        }
        if ($request->project_image) {
            foreach ($request->project_image as $key => $project_image) {
                $imageInfo = getimagesize($project_image);
                $arImages[] = ['photo_pathname' => $project_image->store('public/project'), 'photo_status' => 3, 'photo_width' => $imageInfo[0], 'photo_height' => $imageInfo[1]];
            }
        }
        $project = Project::find($id);
        $project->project_title = $request->project_title;
        $project->project_pathname = self::slugify($request->project_title);;
        $project->project_description = $request->project_description;
        $project->about_client = $request->about_client;
        $project->project_link = $request->project_link;
        $project->save(); 
       
        foreach ($arImages as $key => $image) {
            $photo = new Photo;
            $photo->project_id = $id;
            $photo->photo_pathname = $image['photo_pathname'];
            $photo->photo_width = $image['photo_width'];
            $photo->photo_height = $image['photo_height'];
            $photo->photo_status = $image['photo_status'];
            $photo->save(); 
        }
        return redirect(route('project.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::where('id', $id)->delete();
        Photo::where('project_id', $id)->delete();
        return redirect(route('project.index'));
    }

    public static function slugify($text)
    {
      // replace non letter or digits by -
      $text = preg_replace('~[^\pL\d]+~u', '-', $text);

      // transliterate
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

      // remove unwanted characters
      $text = preg_replace('~[^-\w]+~', '', $text);

      // trim
      $text = trim($text, '-');

      // remove duplicate -
      $text = preg_replace('~-+~', '-', $text);

      // lowercase
      $text = strtolower($text);

      if (empty($text)) {
        return 'n-a';
      }

      return $text;
    }
}
