@extends('layouts.master')

@section('seo_title', 'Mengapa Duma?')

@php
    $whyDuma = [
        'icon-why-duma-1.png' => [
            'Harga Terjangkau dan Ekonomis',
            'Langkanya pasokan kayu asli, Duma® hadir sebagai solusi untuk Pilihan terbaik Anda. Komponen kayu yang merupakan olahan limbah serbuk kayu sisa oleh pabrik kayu dan diproses dengan campuran biji plastik aditif berkualitas membuat produk Duma® menjadi kuat dantahan lama. Duma® mampu memberikan pemasaran produk yang eknomis dan bersaing dibandingkan kayu natural asli.'
        ],
        'icon-why-duma-2.png' => [
            'Perlakuan Layaknya Kayu Asli',
            'Produk Duma® tidak hanya memiliki tampilan dan rasa seperti kayu asli, tetapi dapat diperlakukan seperti kayu asli juga! Semua produk Duma® dapat dipaku, dibor, digergaji, dilem, disanding, dipelitur, dll. Produk Duma® juga dapat di-finishing dengan menggunakan beberapa jenis coating yang berbeda seperti melamine, laminating, ducco, dll. Aplikasi dari produk Duma® hanya terbatas oleh imajinasi Anda.'
        ],
        'icon-why-duma-3.png' => [
            'Perawatan Minimum',
            'Produk Duma® didesain untuk memiliki jangka hidup yang lama dan mempertahankan keindahannya untuk bertahun-tahun mendatang. Produk Duma® juga memiliki tketahanan yang baik terhadap rayap, bahan kimia rumah tangga, air, dan pelapukan, sehingga Anda tidak perlu mengganti produk setiap beberapa tahun. Produuk Duma® hanya perlu sesekali dibersihkan dengan menggunakan peralatan pembersih rumah biasa.'
        ],
        'icon-why-duma-4.png' => [
            'Tidak Bisa Lapuk, Pecah (Menyerpih) ataupun berkarat',
            'Tidak seperti kayu natural asli yang dapat pecah (mudah timbul serpihan) dan lapuk (busuk), semua produk Duma® tidak dapat pecah atau menimbulkan serpihan dan juga tidak bisa lapuk, sehingga rumah akan tetap aman untuk anda dan keluarga.'
        ],
        'icon-why-duma-5.png' => [
            'Anti Rayap dan Hama',
            'Dengan menggunakan produk Duma®, anda tidak perlu lagi khawatir akan rayap yang menghancurkan rumah anda. Dengan komposisi plastik berkualitas tinggi hingga 50% bercampur dengan serbuk kayu asli, semua produk Duma® telah diuji dan lulus tes ketahanan terhadap salah satu jenis rayap yang paling ganas di dunia, yaitu Asian Subterranean Termite (Coptotermes Gestroi) atau yang lebih dikenal dengan rayap tanah (Tes berdasarkan standar JIS K1571).'
        ],
        'icon-why-duma-6.png' => [
            'Pemasangan Cepat & Mudah',
            'Proses pemasangan produk Duma® dapat diselesaikan dengan mudah dan cepat. Pada saat kita menciptakan produk Duma®, salah satu target kami adalah untuk membuat proses pemasangan secepat, semudah dan sesimple mungkin sehingga proses instalasi tidak akan memakan waktu dan tenaga Anda yang berharga,'
        ],
        'icon-why-duma-7.png' => [
            'Dimensi Stabil (Tahan Terhadap Kelembaban)',
            'Produk Duma memiliki ketahanan yang tinggi terhadap kelembapan dibandingkan dengan kayu natural asli. Hal ini membuat semua produk Duma memiliki ketahanan yang sangat baik terhadap air (tingkat peresapan air sangat rendah) dan memiliki dimensi yang stabil (tingkat muai susut rendah) dibandingkan dengan kayu natural asli.'
        ],
        'icon-why-duma-8.png' => [
            'Ramah Lingkungan',
            'Produk Duma diproduksi dengan menggunakan serbuk kayu buatan dan plastik daur ulang yang akan berakhir di tempat pembuangan sampah. Sehingga, selain kita tidak perlu menebang kayu untuk membuat produk Duma, kita juga ikut berkontribusi untuk mengurangi jumlah sampah plastik yang ada di dunia. semua produk Duma juga 100% dapat didaur ulang kembali.'
        ],
    ];
@endphp

@section('content')
    <div class="container container--full-hd px-0">
        <section class="banner mb-5">
            <img src="{{ asset('images/banner-why-duma.png') }}" alt="" class="img-fluid w-100">
        </section>
    </div>
    <div class="container">
        <div class="text-center">
            <h2 class="h5">
                Kelebihan DUMA®?
            </h2>
        </div>
        <div class="row mt-md-5 mt-3">
            @foreach(array_chunk($whyDuma, 4, true) as $benefits)
                @foreach($benefits as $icon => $benefit)
                    <div class="col-md-3">
                        <figure class="w-100 figure text-center">
                            <img src="{{ asset('images/icons/' . $icon) }}"
                                 alt="icon {{ $benefit[0] }}"
                                 class="img-fluid figure-img">
                            <figcaption class="figure-caption">
                                {{ $benefit[0] }}
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
                @if(!$loop->last)
                    <div class="mt-0 mt-md-5 w-100"></div>
                @endif
            @endforeach
        </div>
        <ul class="list-unstyled mt-3 mt-md-5">
            @foreach($whyDuma as $benefit)
                <li class="{{ !$loop->last ? 'mb-3' : '' }}">
                    <div class="row justify-content-between">
                        <div class="col-md-3">
                            <img src="{{ asset('images/why-duma-' . $loop->iteration . '.jpg') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-md-8 border-bottom border-primary-green border-lg {{ $loop->first ? 'border-top' : '' }}">
                            <div class="h-100 border-lg py-3">
                                <strong class="text-color-secondary">
                                    {{ $benefit[0] }}
                                </strong>
                                <p>{{ $benefit[1] }}</p>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
