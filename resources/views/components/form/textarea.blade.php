@props(['name'])
<div class="form-group">
  <x-form.label name="{{ $name }}"/>
  <textarea
    class="form-control"
    rows="4"
    name="{{ $name }}">{{ old($name) ? old($name) : $slot }}</textarea>

  <x-form.error name="{{ $name }}"/>

</div>  