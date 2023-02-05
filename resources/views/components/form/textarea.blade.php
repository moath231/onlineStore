@props(['name'])
<div class="form-group">
  <x-form.label name="{{ $name }}"/>
  <textarea
    class="form-control"
    rows="4"
    name="{{ $name }}"
    {{  $attributes(['value'=> old($name)])  }}
  ></textarea>

  <x-form.error name="{{ $name }}"/>

</div>