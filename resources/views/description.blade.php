@extends('layouts.app')

@section('title', 'Ürün Açıklama Üretici')

@section('content')
    <header class="mb-8 text-center">
        <h1 class="text-3xl font-bold tracking-tight">Ürün Açıklama Üretici</h1>
        <p class="mt-2 text-slate-500 dark:text-slate-400">
            Ürün bilgilerini gir, satış odaklı açıklamayı oluşturalım.
        </p>
    </header>

    <form method="POST"
          action="{{ route('description.generate') }}"
          data-generate-form
          class="space-y-6 rounded-3xl bg-white p-6 shadow-xl shadow-slate-200/60 ring-1 ring-slate-200 dark:bg-slate-800 dark:shadow-none dark:ring-slate-700">
        @csrf

        <div>
            <label for="product_name" class="mb-1 block text-sm font-medium">Ürün adı</label>
            <input type="text"
                   id="product_name"
                   name="product_name"
                   value="{{ old('product_name') }}"
                   placeholder="Örn: Kablosuz Bluetooth Kulaklık"
                   class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200 dark:border-slate-600 dark:bg-slate-900">
            @error('product_name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <div class="mb-1 flex items-center justify-between">
                <label for="features" class="text-sm font-medium">Özellikler</label>
                <span class="text-xs text-slate-400">
                    <span data-counter-target>0</span>/1000
                </span>
            </div>
            <textarea id="features"
                      name="features"
                      rows="5"
                      maxlength="1000"
                      data-counter
                      placeholder="Örn: 30 saat pil ömrü, aktif gürültü engelleme, hızlı şarj..."
                      class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200 dark:border-slate-600 dark:bg-slate-900">{{ old('features') }}</textarea>
            @error('features')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
                data-submit-button
                class="group flex w-full items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-indigo-600 to-violet-600 px-4 py-3 font-semibold text-white shadow-lg shadow-indigo-500/30 transition hover:-translate-y-0.5 hover:shadow-xl hover:shadow-indigo-500/40 focus:outline-none focus:ring-4 focus:ring-indigo-300 active:translate-y-0 disabled:cursor-not-allowed disabled:opacity-70 disabled:hover:translate-y-0">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
            <span>Açıklama Üret</span>
        </button>
    </form>

    @if (session('error'))
        <div class="mt-6 rounded-xl bg-red-50 p-4 text-sm text-red-700 ring-1 ring-red-200 dark:bg-red-900/30 dark:text-red-300 dark:ring-red-800">
            {{ session('error') }}
        </div>
    @endif

    @if (session('result'))
        <section class="mt-8 rounded-3xl bg-white p-6 shadow-xl shadow-slate-200/60 ring-1 ring-slate-200 dark:bg-slate-800 dark:shadow-none dark:ring-slate-700">
            <div class="mb-3 flex items-center justify-between">
                <h2 class="text-lg font-semibold">Sonuç</h2>
                <button type="button"
                        data-copy
                        class="rounded-lg border border-slate-200 px-3 py-1.5 text-sm font-medium transition hover:border-indigo-300 hover:bg-indigo-50 hover:text-indigo-700 dark:border-slate-600 dark:hover:bg-slate-700">
                    Kopyala
                </button>
            </div>
            <p id="result-text" class="whitespace-pre-line leading-relaxed">{{ session('result') }}</p>
        </section>
    @endif
@endsection