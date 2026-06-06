@csrf

<div class="mb-4">

    <label class="block mb-2">
        Nom
    </label>

    <input
        type="text"
        name="name"
        value="{{ old('name',$schoolLevel->name ?? '') }}"
        class="w-full border rounded p-3"
    >

</div>

<button
    class="bg-green-600 text-white px-6 py-2 rounded"
>
    Enregistrer
</button>