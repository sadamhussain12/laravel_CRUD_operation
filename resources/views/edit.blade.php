
@extends("add")
    @section("policeId", $edit->id)
    @section("sho",$edit->sho)
    @section("location",$edit->location)
    @section("contact",$edit->contact)
    
    @section("editMethod")
    {{ method_field('PUT')}} 
    @show