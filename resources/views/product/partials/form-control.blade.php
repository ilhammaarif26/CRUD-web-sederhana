
<ul>
    <li class="py-2">
        <label for="name">Nama:</label>
        <input type="text" class="form-control" value="{{ old('name') ?? $product->name}}" name="name" id="name" >
        {{-- dibawah merupakan validasi pada pengisian product, terdapat pada method store di productcontroller --}}
        @error('name')
            <div class="text-danger mt-2">
                {{$message}}
            </div>
        @enderror
    </li>
    <li class="py-2">
        <label for="desc">Description:</label>
        <textarea  name="desc" id="desc" cols="30" rows="10" class="form-control ">{{ old('desc') ?? $product->desc}}</textarea>
        @error('desc')
            <div class="text-danger mt-2">
                {{$message}}
            </div>
        @enderror
    </li>
    
    <li class="py-2">
        <button type="submit" onclick="mySubmit()" class="btn btn-primary">{{$submit ?? 'Update'}}</button>
    </li>
</ul>                           