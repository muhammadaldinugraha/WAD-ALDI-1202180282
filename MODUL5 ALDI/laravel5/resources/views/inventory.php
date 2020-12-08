<form action="{{route('inventory.delete')}}" class="mt-2" method="post">
    @csrf
    <input type="hidden" values="{{$item->id}}" name="id">
    <button class="btn btn-danger p-2">Delete</button>