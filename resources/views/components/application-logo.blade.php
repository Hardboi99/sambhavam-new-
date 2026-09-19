{{-- SAVE AS: resources/views/components/application-logo.blade.php (overwrite the existing file) --}}

<style>
.adminlogo{
    height: 60px;
    width: 100px;
}
</style>

<img class="adminlogo" src="{{ asset('images/logo.png') }}" alt="Sambhavam" {{ $attributes }}>