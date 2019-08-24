@component('mail::message')
# Introduction

You have a message from {{$contact->name}} - {{$contact->email}} 
{{$contact->message}}

Thanks
@endcomponent
