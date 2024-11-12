@extends('layout.contact')

@section('content')
<div class="container mt-5 text-center">

    <h2 class="text-white">Hubungi Kami</h2>
        <p class="text-muted">Anda dapat menghubungi kami melalui kontak di bawah ini atau dengan mengirim pesan melalui form kontak.</p>

            <div class="my-4 text-white">
                <p><strong>Telepon:</strong> +62 896-3961-7233</p>
                    <p><strong>Email:</strong> Zilio@perusahaan.com</p>
                        <p><strong>Media Sosial:</strong></p>
                            <a href="https://discord.gg/BnrePGSy" class="btn btn-outline-light btn-sm mx-1" target="_blank">
                                <i class="fab fa-discord"></i> Discord
                                    </a>
                                        <a href="https://instagram.com/ziizott" class="btn btn-outline-light btn-sm mx-1" target="_blank">
                                        <i class="fab fa-instagram"></i> Instagram
                                    </a>
                                <a href="https://wa.me/089639617233" class="btn btn-outline-light btn-sm mx-1" target="_blank">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                    </div>

                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#contactModal">
                        Hubungi Perusahaan
                    </button>

                    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content bg-dark text-white">
                                <div class="modal-header border-secondary">
                                    <h5 class="modal-title" id="contactModalLabel">Formulir Kontak</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            
                                                <div class="modal-body">
                                                    <form method="POST" action="">
                                                @csrf

                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Nama</label>
                                                    <input type="text" class="form-control bg-secondary text-white" id="name" name="name" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control bg-secondary text-white" id="email" name="email" required>
                                                </div>

                                                <div class="mb-3">
                                            <label for="message" class="form-label">Pesan</label>
                                        <textarea class="form-control bg-secondary text-white" id="message" name="message" rows="5" required></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-light w-100">Kirim Pesan</button>
                                </form>
                            </div>

                        <div class="modal-footer border-secondary">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection