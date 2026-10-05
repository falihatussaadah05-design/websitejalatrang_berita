@extends('layouts.app')

@section('title', 'Tambah Berita')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8">

        <div class="card card-berita">

            {{-- HEADER --}}
            <div class="filter-header">
                <i class="bi bi-plus-circle-fill me-1"></i>
                Tambah Berita
            </div>

            <div class="card-body">

                <form
                    action="{{ route('berita.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf

                    {{-- JUDUL --}}
                    <div class="mb-3">

                        <label for="judul" class="form-label fw-semibold">
                            Judul
                        </label>

                        <input
                            type="text"
                            name="judul"
                            id="judul"
                            class="form-control"
                            value="{{ old('judul') }}"
                            placeholder="Judul berita..."
                        >

                        @error('judul')
                            <div class="text-danger small">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- KATEGORI --}}
                    <div class="mb-3">

                        <label for="kategori" class="form-label fw-semibold">
                            Kategori
                        </label>

                        <select
                            name="kategori"
                            id="kategori"
                            class="form-select"
                        >

                            <option value="">
                                -- Pilih Kategori --
                            </option>

                            @foreach (['Olahraga', 'Pendidikan', 'Potensi', 'Pembangunan'] as $k)

                                <option
                                    value="{{ $k }}"
                                    @selected(old('kategori') == $k)
                                >
                                    {{ $k }}
                                </option>

                            @endforeach

                        </select>

                        @error('kategori')
                            <div class="text-danger small">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- HASHTAG --}}
                    <div class="mb-3">

                        <label for="tags" class="form-label fw-semibold">
                            Hashtag
                        </label>

                        <input
                            type="text"
                            name="tags"
                            id="tags"
                            class="form-control"
                            value="{{ old('tags') }}"
                            placeholder="Contoh: CVCup, Jalatrang, SepakBola, Olahraga"
                        >

                        <small class="text-muted">
                            Pisahkan setiap hashtag dengan koma.
                            Contoh: CVCup, Jalatrang, SepakBola
                        </small>

                        @error('tags')
                            <div class="text-danger small">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- GAMBAR --}}
                    <div class="mb-3">

                        <label for="gambar" class="form-label fw-semibold">
                            Gambar Berita
                        </label>

                        <input
                            type="file"
                            name="gambar"
                            id="gambar"
                            class="form-control"
                            accept="image/*"
                        >

                        <small class="text-muted">
                            Format: JPG, JPEG, PNG, atau WEBP.
                            Maksimal 2 MB.
                        </small>

                        @error('gambar')
                            <div class="text-danger small">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- PENULIS --}}
                    <div class="mb-3">

                        <label for="penulis" class="form-label fw-semibold">
                            Penulis
                        </label>

                        <input
                            type="text"
                            name="penulis"
                            id="penulis"
                            class="form-control"
                            value="{{ old('penulis') }}"
                            placeholder="Nama penulis..."
                        >

                        @error('penulis')
                            <div class="text-danger small">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- ISI BERITA --}}
                    <div class="mb-3">

                        <label for="isi" class="form-label fw-semibold">
                            Isi Berita
                        </label>

                        <textarea
                            name="isi"
                            id="isi"
                            rows="6"
                            class="form-control"
                            placeholder="Tulis isi berita di sini..."
                        >{{ old('isi') }}</textarea>

                        @error('isi')
                            <div class="text-danger small">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- TOMBOL --}}
                    <div class="d-flex gap-2 pt-2 border-top mt-3">

                        <button
                            type="submit"
                            class="btn btn-primary"
                        >
                            <i class="bi bi-save"></i>
                            Simpan
                        </button>

                        <a
                            href="{{ route('berita.index') }}"
                            class="btn btn-outline-secondary"
                        >
                            Batal
                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection