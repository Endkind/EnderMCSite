<div class="alert alert-danger relative" role="alert">
    <i class="bi bi-exclamation-triangle"></i>
    {{ $slot }}
    <button class="absolute right-0 top-0 bottom-0 btn" onclick="this.parentElement.remove()">
        <i class="bi bi-x-lg text-black dark:text-white"></i>
    </button>
</div>