@props([
    'action',
    'params' => [],
    'item_name' => 'item',
    'label' => 'Delete',
    'confirm_msg' => 'You are about to delete this item. Are you sure?'
])

<div>
    <form action="{{ route($action, $params) }}" method="POST" class="inline">
        @csrf
        @method('DELETE')

        <button
            type="button"
            title="Delete {{ $item_name }}"
            onclick="confirmDelete(this, '{{ $confirm_msg }}')"
            {{ $attributes->merge(['class' => 'text-red-400 hover:text-red-300 transition-colors text-sm font-medium cursor-pointer inline-flex items-center gap-1']) }}
        >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
            {{ $label }}
        </button>
    </form>
</div>

<script>
    function confirmDelete(button, confirm_msg){
        Swal.fire({
            title: 'Are you sure?',
            text: confirm_msg,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel'
        }).then((result) => {
            if (result.isConfirmed)
                button.closest('form').submit();
        });
    }
</script>
