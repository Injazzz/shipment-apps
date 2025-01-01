@extends('layouts.profile')

@section('navbar-profile')
<x-navbar.navbar-editProfile :user="$user" />
@endsection

@section('profile-content')

<div class="w-full">
    <form action="{{route('profile.update', $user->id)}}" method="POST" enctype="multipart/form-data"
        class="w-full flex flex-col lg:grid lg:grid-cols-4 mt-7">
        @csrf
        @method('PUT')

        @if (session('success'))
        <div class="toast toast-top toast-center z-50">
            <div class="alert alert-success">
                <span>{{ session('success') }}</span>
            </div>
        </div>
        @endif

        @if ($errors->any())
        <div class="toast">
            <div class="alert alert-error z-50">
                @foreach ($errors->all() as $error)
                <span>{{ $error }}</span>
                @endforeach
            </div>
        </div>
        @endif

        <div class="col-span-2 flex flex-col pl-5">
            <div class="flex gap-5 z-10">
                <div class="shrink-0 z-10">
                    <!-- Gambar Profile yang akan ditampilkan -->
                    <img id="profile-photo-preview"
                        class="h-48 w-48 object-cover rounded-full shadow-pils dark:shadow-pilsDark"
                        src="{{ asset('storage/profile_photos/' . $user->profile_photo) }}"
                        alt="Current profile photo" />
                </div>

                <label class="block">
                    <span class="sr-only">Choose profile photo</span>
                    <!-- Input file untuk memilih foto -->
                    <input type="file" name="profile_photo" class="block w-full text-sm text-slate-500
                              file:mr-4 file:py-2 file:px-4
                              file:rounded-full file:border-0
                              file:text-sm file:font-semibold
                              file:bg-violet-50 file:text-violet-700
                              hover:file:bg-violet-100" onchange="previewProfilePhoto(event)" />
                </label>
                @error('profile_photo')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-1 mt-5">
                <span class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-user-round">
                        <circle cx="12" cy="8" r="5" />
                        <path d="M20 21a8 8 0 0 0-16 0" />
                    </svg>
                    Username
                </span>
                <input type="text" name="name" value="{{$user->name}}" class="p-3 rounded-xl border mt-2 w-96 min-w-80">
                @error('name')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- <div class="flex flex-col gap-1 mt-5">
                <span class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-key-round">
                        <path
                            d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z" />
                        <circle cx="16.5" cy="7.5" r=".5" fill="currentColor" />
                    </svg>
                    Password
                </span>
                <input type="text" name="current_password" value="{{ $user->password }}"
                    class="p-3 rounded-xl border mt-2 w-96 min-w-80">
                @error('current_password')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div> --}}

            <div class="absolute bottom-5 right-5 lg:right-20">
                <button type="submit" class="btn btn-success">Save Changes</button>
            </div>
        </div>
        <div class="col-span-2 flex flex-col gap-5 mt-5 pl-5 lg:pl-0">
            <div>
                <span class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-mail">
                        <rect width="20" height="16" x="2" y="4" rx="2" />
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                    </svg>
                    Email
                </span>
                <input type="text" name="email" value="{{$user->email}}"
                    class="p-3 rounded-xl border mt-2 w-96 min-w-80">
                @error('email')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <span class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-phone">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                    </svg>
                    Phone
                </span>
                <input type="text" name="phone" value="{{ preg_replace('/(\d{4})(?=\d)/', '$1-', $user->phone) }}"
                    class="p-3 rounded-xl border mt-2 w-96 min-w-80">
                @error('phone')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-1">
                <span class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-building-2">
                        <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z" />
                        <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2" />
                        <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2" />
                        <path d="M10 6h4" />
                        <path d="M10 10h4" />
                        <path d="M10 14h4" />
                        <path d="M10 18h4" />
                    </svg>
                    Office
                </span>
                <input type="text" name="office" value="{{$user->office}}"
                    class="p-3 rounded-xl border mt-2 w-96 min-w-80">
                @error('office')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-1">
                <span class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-joystick">
                        <path d="M21 17a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2Z" />
                        <path d="M6 15v-2" />
                        <path d="M12 15V9" />
                        <circle cx="12" cy="6" r="3" />
                    </svg>
                    Role
                </span>
                <select name="role" class="select select-bordered w-full max-w-xs">
                    <option disabled {{ empty($user->role) ? 'selected' : '' }}>Select role</option>
                    <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="manager" {{ $user->role === 'manager' ? 'selected' : '' }}>Manager</option>
                </select>
                @error('role')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </form>
</div>

@endsection

<script>
    // Fungsi untuk mem-preview gambar sebelum di-upload
    function previewProfilePhoto(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        // Event ketika file berhasil dibaca
        reader.onload = function(e) {
            // Mengubah sumber gambar sesuai dengan file yang dipilih
            const imagePreview = document.getElementById('profile-photo-preview');
            imagePreview.src = e.target.result; // Menampilkan gambar yang dipilih
        };

        // Membaca file sebagai URL
        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
