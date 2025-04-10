<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('マイページ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p><strong>名前：</strong> {{ $user->name }}</p>
                <p><strong>メール：</strong> {{ $user->email }}</p>
                <p><strong>誕生日：</strong> {{ $user->birthday }}</p>
                <p><strong>性別：</strong> {{ $user->gender }}</p>
                <p><strong>権限：</strong> {{ $user->role }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
