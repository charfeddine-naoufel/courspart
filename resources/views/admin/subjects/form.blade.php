@csrf

<div class="mb-4">

    <label class="block mb-2">
        Nom
    </label>

    <input
        type="text"
        name="name"
        value="{{ old('name', $subject->name ?? '') }}"
        class="w-full border rounded p-3"
    >

</div>

<div class="mb-4">

    <label class="block mb-2">
        Description
    </label>

    <textarea
        name="description"
        class="w-full border rounded p-3"
    >{{ old('description', $subject->description ?? '') }}</textarea>

</div>

<div class="mb-4">

    <label>

        <input
            type="checkbox"
            name="is_active"
            value="1"
            @checked(old('is_active',$subject->is_active ?? true))
        >

        Active

    </label>

</div>

<button
    class="bg-green-600 text-white px-6 py-2 rounded"
>
    Enregistrer
</button>