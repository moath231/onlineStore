@props(['name'])
<button
class="btn btn-success text-white" 
{{  $attributes(['value'=> old($name)])  }}
>
<i class="fa fa-fw fa-lg fa-check-circle"></i>
  {{ $name }}
</button>