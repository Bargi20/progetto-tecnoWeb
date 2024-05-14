@php
        if (empty($imgFile)) {
            $imgFile = 'default.jpg';
        }
        if (null !== $attrs) {
            $attrs = 'class="' . $attrs . '"';//il punto sta per concatenare le stringhe cosi che creo l'attributo HTML class prende il valore di imagefrm
        }

@endphp
<img src="{{ asset('images/products/' . $imgFile) }}" {!! $attrs !!}>
