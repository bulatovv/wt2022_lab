<div id="modal{{ $item->id }}" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $item->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>{{ $item->description }}</p> 
                <a href={{ route('items.show', [$item])}}>
                    <img class="img-fluid mb-1" src="{{ asset('img/uploads/' . $item->image) }}"><br>
                </a>
                {{--
                <button type="button" class="btn btn-primary" 
                 data-bs-toggle="popover" title="Заголовок" 
                 data-bs-content="Дополнительная информация">
                    Раскрыть
                </button>
                --}}
                <div class="container d-flex mb-3">
                    @can('update', $item)
                        <a href="{{ route('items.edit', [$item]) }}" class="btn btn-success mx-1">Редактировать</a>
                    @endcan

                    @can('delete', $item)
                        <form action={{ route('items.destroy', [$item]) }} method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Удалить">
                        </form>
                    @endcan
                </div>
                
                <div class="container d-flex">
                    @can('forceDelete', $item)
                        @if($item->trashed())
                            <form action={{ route('items.restore', [$item]) }} method="post">
                                @csrf
                                <input type="submit" class="btn btn-secondary mx-1" value="Восстановить">
                            </form>
                        @endif
                    @endcan

                    @can('restore', $item)
                        <form action={{ route('items.forceDelete', [$item]) }} method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-dark" value="Стереть навсегда">
                        </form>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
