<div class="relative">
  <button type="button" class=" top-0 right-0 pr-2 absolute flex h-full items-center"
    onclick="clearInput('{{ $name }}')">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
     class="w-6 h-6 pr-2">
    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
  </svg>
  </button>
  <input type="text" placeholder="{{ $placeholder }}"
  name="{{ $name }}" value="{{ $value }}" id="{{ $name }}"
  class="w-full pr-8 shadow-md rounded-md border-0 py-1.5 px-2.5 text-sm ring-1 ring-slate-300 placeholder:text-slate-500/70 placeholder:font-semibold  focus:ring-slate-600/50 focus:ring-2" />
</div>
<script>



function clearInput(id) {
    var inputElement = document.getElementById(id);
    if (inputElement) {
      inputElement.value = ' ';
    }
    var formElement = document.getElementById('formId');
    if (formElement) {
      formElement.submit();
    }
  }
</script>