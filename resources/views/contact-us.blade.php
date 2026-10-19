@extends('layouts.app')

@section('content')
    <section
        class="min-h-screen py-6 sm:py-12 px-3 sm:px-6 flex flex-col justify-center items-center relative overflow-hidden">
        <!-- Background Gradient Circle Decoration -->
        <div
            class="absolute top-10 left-10 w-36 h-36 sm:w-48 sm:h-48 bg-pink-200/40 rounded-full blur-3xl pointer-events-none">
        </div>
        <div
            class="absolute bottom-10 right-10 w-48 h-48 sm:w-64 sm:h-64 bg-teal-200/40 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="max-w-2xl w-full mx-auto z-10">
            <!-- Back Link -->
            <div class="mb-4 sm:mb-6">
                <a href="{{ route('index') }}"
                    class="text-xs font-semibold text-teal-600 hover:text-teal-700 transition inline-flex items-center gap-1 font-['Raleway']">
                    <i class="fa-solid fa-arrow-left text-[10px]"></i>
                    <span>Back ke Karis Studio</span>
                </a>
            </div>

            <!-- Header Content -->
            <div class="text-center mb-6 sm:mb-8">
                <span
                    class="inline-block bg-[#d2f3ed] text-[#23a099] text-[9px] sm:text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2.5 font-['Raleway']">
                    KARIS STUDIO · BOOKING
                </span>
                <h1
                    class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-800 tracking-tight font-['Baloo_2'] leading-tight">
                    Let's Build Something <span class="text-[#e271a6]">Amazing <br>Together</span>
                </h1>
                <p class="text-xs text-slate-500 mt-2 max-w-md mx-auto leading-relaxed font-['Raleway'] px-2">
                    Tell us about your project idea. Complete the booking form below and send the details to the Karis
                    Studio team.
                </p>
            </div>

            <!-- Alert Notifications (Fallback jika tidak pakai AJAX) -->
            <div id="alert-container">
                @if (session('success'))
                    <div data-alert
                        class="mb-5 p-3.5 sm:p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-2xl text-xs font-medium flex items-center justify-between shadow-sm">
                        <span>{{ session('success') }}</span>
                        <button type="button" onclick="this.parentElement.remove()"
                            class="font-bold text-emerald-500 ml-3">&times;</button>
                    </div>
                @endif

                @if (session('error'))
                    <div data-alert
                        class="mb-5 p-3.5 sm:p-4 bg-rose-50 border border-rose-200 text-rose-700 rounded-2xl text-xs font-medium flex items-center justify-between shadow-sm">
                        <span>{{ session('error') }}</span>
                        <button type="button" onclick="this.parentElement.remove()"
                            class="font-bold text-rose-500 ml-3">&times;</button>
                    </div>
                @endif
            </div>

            <!-- Form Card -->
            <div
                class="bg-white/80 backdrop-blur-md p-5 sm:p-8 rounded-2xl sm:rounded-3xl shadow-lg border border-pink-100/60">
                <form id="contact-form" action="{{ route('contact.send') }}" method="POST"
                    onsubmit="sendToDiscordAjax(event)"
                    class="space-y-4 sm:space-y-5 font-['Raleway']">
                    @csrf

                    <!-- Full name & Email -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 sm:gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Full name *</label>
                            <input type="text" name="full_name" required placeholder="Enter your full name"
                                class="w-full px-3.5 sm:px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:outline-none focus:ring-2 focus:ring-teal-500 transition placeholder-slate-300 font-['Raleway']">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Email *</label>
                            <input type="email" name="email" required placeholder="name@email.com"
                                class="w-full px-3.5 sm:px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:outline-none focus:ring-2 focus:ring-teal-500 transition placeholder-slate-300 font-['Raleway']">
                        </div>
                    </div>

                    <!-- Company name & Type of inquiry -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 sm:gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Company name *</label>
                            <input type="text" name="company_name" required placeholder="PT/Universitas"
                                class="w-full px-3.5 sm:px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:outline-none focus:ring-2 focus:ring-teal-500 transition placeholder-slate-300 font-['Raleway']">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Type of inquiry *</label>
                            <select name="inquiry_type" required
                                class="w-full px-3.5 sm:px-4 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-600 focus:outline-none focus:ring-2 focus:ring-teal-500 transition font-['Raleway'] bg-white">
                                <option value="" disabled selected>How can we help?</option>
                                <option value="Full Game Development">Full Game Development</option>
                                <option value="In-Game Integration / Virtual Boot">In-Game Integration / Virtual Booth</option>
                                <option value="Partnership & Collaboration">Partnership & Collaboration</option>
                                <option value="General Inquiry">General Inqury</option>
                            </select>
                        </div>
                    </div>

                    <!-- Estimated budget -->
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Estimated budget *</label>
                        <select name="budget" required
                            class="w-full px-3.5 sm:px-4 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-600 focus:outline-none focus:ring-2 focus:ring-teal-500 transition font-['Raleway'] bg-white">
                            <option value="" disabled selected>Select your estimated budget</option>
                            <option value="Below Rp 10.000.000">Below Rp 5.000.000</option>
                            <option value="Rp 10.000.000 - Rp 50.000.000">Rp 5.000.000 - Rp 15.000.000</option>
                            <option value="Above Rp 50.000.000">Above Rp 15.000.000</option>
                            <option value="Pending further discussion.">Pending further discussion.</option>
                        </select>
                    </div>

                    <!-- Project detail -->
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Project detail *</label>
                        <textarea name="project_detail" rows="4" required
                            placeholder="Tell us about your vision, target audience, or game references"
                            class="w-full px-3.5 sm:px-4 py-2.5 rounded-xl border border-slate-200 text-xs focus:outline-none focus:ring-2 focus:ring-teal-500 transition placeholder-slate-300 font-['Raleway']"></textarea>
                    </div>

                    <!-- Card: Book a meeting -->
                    <div class="p-4 sm:p-5 rounded-2xl border border-slate-200/80 bg-slate-50/50 space-y-3">
                        <div class="flex items-center gap-2 text-[#17938b]">
                            <i class="fa-regular fa-calendar-check text-sm sm:text-base"></i>
                            <h3 class="text-xs sm:text-sm font-bold text-slate-800">Book a meeting</h3>
                        </div>
                        <p class="text-[10px] sm:text-[11px] text-slate-500 leading-relaxed">
                            Choose a preferred date and time for your free consultation. We'll confirm the meeting by email.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 sm:gap-4 pt-1">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Preferred date *</label>
                                <input type="date" name="preferred_date" min="{{ date('Y-m-d') }}" required
                                    class="w-full px-3.5 sm:px-4 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-600 focus:outline-none focus:ring-2 focus:ring-teal-500 transition bg-white font-['Raleway']">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Preferred time (WIB) *</label>
                                <input type="time" name="preferred_time" list="time-options" step="900" required
                                    onchange="this.blur()"
                                    class="w-full px-3.5 sm:px-4 py-2.5 rounded-xl border border-slate-200 text-xs text-slate-600 focus:outline-none focus:ring-2 focus:ring-teal-500 transition bg-white font-['Raleway']">
                                @include('partials.time-options')
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button type="submit" id="submit-btn"
                            class="w-full py-3 sm:py-3.5 px-6 rounded-full text-white text-xs font-bold bg-gradient-to-r from-[#17938b] via-[#21a099] to-[#ce6999] hover:opacity-95 shadow-md transition transform active:scale-95 flex items-center justify-center gap-2 font-['Baloo_2']">
                            <i class="fa-regular fa-paper-plane text-xs"></i>
                            <span id="btn-text">Submit Booking</span>
                        </button>
                    </div>

                    <p class="text-[10px] text-slate-400 text-center leading-tight mt-3 font-['Raleway'] px-2">
                        When you submit, your data will be sent directly to the Karis Studio team via Discord.
                    </p>
                </form>
            </div>

            <!-- Copyright Footnote -->
            <div class="text-center mt-6 text-[10px] text-slate-400">
                © Karis Studio · karis.info
            </div>
        </div>
    </section>

    <!-- Script AJAX untuk Debugging langsung ke Console Browser (F12) -->
    <script>
    async function sendToDiscordAjax(event) {
        event.preventDefault();

        const form = document.getElementById('contact-form');
        const formData = new FormData(form);
        const submitBtn = document.getElementById('submit-btn');
        const btnText = document.getElementById('btn-text');
        const alertContainer = document.getElementById('alert-container');

        // Ubah tombol jadi loading state
        btnText.innerText = 'Sending to Discord...';
        submitBtn.disabled = true;

        try {
            const response = await fetch("{{ route('contact.send') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: formData
            });

            const result = await response.json();

            // CEK HASILNYA LANGSUNG DI CONSOLE BROWSER (Tekan F12)
            console.log("=== DISCORD WEBHOOK RESPONSE ===", result);

            if (response.ok && result.success) {
                // Munculkan alert sukses di halaman
                alertContainer.innerHTML = `
                    <div class="mb-5 p-3.5 sm:p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-2xl text-xs font-medium flex items-center justify-between shadow-sm">
                        <span>${result.message}</span>
                        <button type="button" onclick="this.parentElement.remove()" class="font-bold text-emerald-500 ml-3">&times;</button>
                    </div>
                `;
                form.reset(); // Kosongkan form
            } else {
                // Munculkan alert error di halaman
                alertContainer.innerHTML = `
                    <div class="mb-5 p-3.5 sm:p-4 bg-rose-50 border border-rose-200 text-rose-700 rounded-2xl text-xs font-medium flex items-center justify-between shadow-sm">
                        <span>${result.message || 'Gagal mengirim ke Discord.'}</span>
                        <button type="button" onclick="this.parentElement.remove()" class="font-bold text-rose-500 ml-3">&times;</button>
                    </div>
                `;
            }
        } catch (error) {
            console.error("Network/System Error:", error);
            alert('Terjadi kesalahan sistem atau jaringan.');
        } finally {
            btnText.innerText = 'Submit Booking';
            submitBtn.disabled = false;
        }
    }
    </script>
@endsection
