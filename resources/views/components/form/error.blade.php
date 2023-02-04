@props(['name'])
@error($name)
    <div class="errorMessage text-xs mt-2">{{ $message }}</div>
@enderror