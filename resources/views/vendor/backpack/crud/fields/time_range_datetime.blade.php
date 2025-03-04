{{-- resources/views/vendor/backpack/crud/custom_fields/time_range_datetime.blade.php --}}
<div class="form-group col-sm-{{ $field['wrapper']['width'] ?? '12' }}">
    <label>{!! $field['label'] !!}</label>
    <div class="input-group">
        <input
            type="date"
            id="{{ $field['name'] }}-date"
            name="{{ $field['name'] }}_date"
            value="{{ old($field['name'] . '_date', isset($field['value']) ? substr($field['value'], 0, 10) : '') }}"
            class="form-control"
        >
        <select
            id="{{ $field['name'] }}-time"
            name="{{ $field['name'] }}_time"
            class="form-control"
        >
            @php
                for ($hora = 0; $hora < 24; $hora++) {
                    for ($minutos = 0; $minutos < 60; $minutos += 15) {
                        $horaFormateada = str_pad($hora, 2, '0', STR_PAD_LEFT);
                        $minutosFormateados = str_pad($minutos, 2, '0', STR_PAD_LEFT);
                        $horaCompleta = $horaFormateada . ':' . $minutosFormateados;
                        $selected = '';

                        if (isset($field['value'])) {
                            $horaValue = substr($field['value'], 11, 5);
                            if ($horaValue == $horaCompleta) {
                                $selected = 'selected';
                            }
                        }

                        echo '<option value="' . $horaCompleta . '" ' . $selected . '>' . $horaCompleta . '</option>';
                    }
                }
            @endphp
        </select>
    </div>
    <input type="hidden" name="{{ $field['name'] }}" id="{{ $field['name'] }}-hidden-input" value="{{ old($field['name'], $field['value'] ?? '') }}">
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dateInput = document.getElementById('{{ $field['name'] }}-date');
        const timeSelect = document.getElementById('{{ $field['name'] }}-time');
        const hiddenInput = document.getElementById('{{ $field['name'] }}-hidden-input');

        function updateHiddenInput() {
            const dateValue = dateInput.value;
            const timeValue = timeSelect.value;
            if (dateValue && timeValue) {
                hiddenInput.value = dateValue + 'T' + timeValue + ':00';
            } else {
                hiddenInput.value = '';
            }
        }

        dateInput.addEventListener('change', updateHiddenInput);
        timeSelect.addEventListener('change', updateHiddenInput);

        updateHiddenInput(); // Inicializar el input oculto al cargar la página.
    });
</script>