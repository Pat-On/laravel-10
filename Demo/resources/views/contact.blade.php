<div>
    <h1>Contact</h1>

    {{-- rendering components --}}
    <x-button />

    <br/>

    {{-- from the folder  this is rendered from the call in the class--}}
    
    {{-- 
    FROM: App/View/Components
    public function render(): View|Closure|string
    {
        return view('components.forms.button');
    }
    --}}
    
    <x-forms.button />


    {{-- Different naming convention  --}}

    <x-input-field />


</div>