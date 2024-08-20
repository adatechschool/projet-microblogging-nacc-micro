<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Biography Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's biography information.") }}
        </p>
    </header>



    <form method="post" action="{{ route('profile.store-bio') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
         
            <x-text-input name="biography" id="biography" biography="biography" type="text" class="mt-1 block w-full" :value="old('biography', $user->biography)" required autofocus autocomplete="biography" />
            <x-input-error class="mt-2" :messages="$errors->get('biography')" />
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>


        </div>
    </form>
</section>
</body>
</html>