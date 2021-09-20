<div class="flex flex-col items-center mt-4">
    <input type="text" placeholder="Do or do not..." wire:model="item" wire:keydown.enter="addTodo">
    @error('item')
        <span class="text-red-500 mt-2">{{ $message }}</span>
    @enderror
</div>
