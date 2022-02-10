@section('title', $title)

<form class="{{ $gridClass }}">
    <div class="d-flex justify-content-start gap-2 mb-2">
        <h3 class="mb-1">
            @foreach(collect($this->buttons())->where('props.position', '=', 'return') as $button)
                {{ $button->render()->with($button->data()) }}
            @endforeach

            {{ $title }}
        </h3>
    </div>

    @foreach($this->fields() as $field)
        {{ $field->render()->with($field->data()) }}
    @endforeach

    <div class="col-md-12">
        <div class="d-flex justify-content-end gap-2">
            @foreach(collect($this->buttons())->whereNull('props.position') as $button)
                {{ $button->render()->with($button->data()) }}
            @endforeach
        </div>
    </div>
</form>
