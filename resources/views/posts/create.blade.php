@include('layouts.navigation')
<script src="https://cdn.tailwindcss.com"></script>
<a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
<a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
{{-- Formulário --}}
<div class="flex items-center justify-center p-12">
    <div class="mx-auto w-full max-w-[550px] rounded-md bg-[#f7f7f7]">
        <label class="text-center mb-1 block text-xl font-semibold text-[#07074D]">
            <p class="rounded-md bg-[#f3edee]">
                Criar Postagem
            </p>
        </label>
        <form class="py-6 px-9" action="/posts/create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                    <label>
                        <span>Título</span>
                        <input class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" type="text" name="title" required="">
                    </label>
                </label>
            </div>
            <div class="mb-5">
                <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                    <label>
                        <span>Conteúdo</span>
                        <textarea class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"name="description" rows="3" required=""></textarea>
                    </label>
                </label>
            </div>
            <input type="hidden" name="create" value="enviar" />
            <button class="hover:shadow-form w-full rounded-md bg-[#cf0000] py-3 px-8 text-center text-base font-semibold text-white outline-none" title="Enviar"><b class="icon icon-paper-plane-o"> Enviar</b></button>

        </form>
    </div>
</div>
</div>
