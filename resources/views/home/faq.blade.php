@extends('layout.main')

@section('content')
    {{-- About Us --}}
    <div class="about-section bg-third text-white">
        <div class="about max-w-7xl mx-auto py-16 text-center px-12">
            <h1 class="text-5xl font-bold">Frequenlty Asked Question (FAQ)</h1>
            <p class="text-xl mt-4">Hal-hal yang sering menjadi pertanyaan khalayak.</p>
            @php
                $faqs = [
                    [
                        'question' => 'Apa itu DEMA UNIDA?',
                        'answer' =>
                            'Dema UNIDA adalah It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
                    ],
                    [
                        'question' => 'Apakah UNIDA mempunyai layanan konsultasi Psikolog?',
                        'answer' =>
                            'Dema UNIDA adalah It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
                    ],
                    [
                        'question' => 'Bagaimana cara menghubungi DEMA UNIDA?',
                        'answer' =>
                            'Dema UNIDA adalah It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
                    ],
                    [
                        'question' => 'Bagaimana cara bergabung dengan DEMA UNIDA?',
                        'answer' =>
                            'Dema UNIDA adalah It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
                    ],
                ];
            @endphp
            <div class="faqs-group mt-4">
                @foreach ($faqs as $index => $faq)
                    <div class="faq-item my-3 bg-white rounded-lg border border-gray-200 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-4 focus:outline-none"
                            onclick="toggleFaq({{ $index }})">
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-gray-900 ">{{ $faq['question'] }}</span>
                                <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200"
                                    id="arrow-{{ $index }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-answer px-6 py-4 bg-gray-200 hidden" id="answer-{{ $index }}">
                            <p class="text-gray-800">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Faq Script --}}
    <script>
        function toggleFaq(index) {
            const answer = document.getElementById(`answer-${index}`);
            const arrow = document.getElementById(`arrow-${index}`);
            answer.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        }
    </script>
@endsection
