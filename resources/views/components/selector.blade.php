@props([
    'id' => 'js-example-basic-multiple',
    'items' => null,
    'selected' => []
])


<select id="{{ $id }}" class="{{ $id }} w-100" name="{{ $id }}[]" multiple="multiple">
    @if($items)
        @foreach($items as $item)
            <option value="{{ $item['id'] ?? $item->id }}"
                    @if(in_array($item['id'] ?? $item->id, $selected)) selected @endif>
                {{ $item['name'] ?? $item->name }}
            </option>
        @endforeach
    @endif
</select>

<script>
    $(document).ready(function() {
        $('#{{ $id }}').select2({
            tags: true,
            tokenSeparators: [','],
            placeholder: "Выберите или добавьте..",
            width: '100%',
        });
    });
</script>
