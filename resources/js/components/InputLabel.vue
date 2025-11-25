<script setup>
import { computed } from 'vue';

const props = defineProps({
  modelValue: {
    type: [String, Number],
    default: ''
  },
  label: {
    type: String,
    required: true
  },
  type: {
    type: String,
    default: 'text'
  },
  placeholder: {
    type: String,
    default: ''
  },
  disabled: {
    type: Boolean,
    default: false
  },
  required: {
    type: Boolean,
    default: false
  },
  error: {
    type: String,
    default: ''
  },
  helperText: {
    type: String,
    default: ''
  },
  inputName:{
    type: String,
    default: ''
  }
});

const emit = defineEmits(['update:modelValue']);

const inputId = computed(() => `input-${Math.random().toString(36).substr(2, 9)}`);

const handleInput = (event) => {
  emit('update:modelValue', event.target.value);
};
</script>

<template>
  <div class="input-wrapper">
    <label :for="inputId" class="input-label">
      {{ label }}
      <span v-if="required" class="required">*</span>
    </label>
    
    <input
      :id="inputId"
      :type="type"
      :value="modelValue"
      :placeholder="placeholder"
      :name="inputName"
      :disabled="disabled"
      :class="['input-field', { 'input-error': error, 'input-disabled': disabled }]"
      @input="handleInput"
    />
    
    <p v-if="error" class="error-message">{{ error }}</p>
    <p v-else-if="helperText" class="helper-text">{{ helperText }}</p>
  </div>
</template>

<style scoped>
.input-wrapper {
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
  width: 100%;
}

.input-label {
  font-size: 0.875rem;
  font-weight: 600;
  color: #1B9AAA;
  display: flex;
  align-items: center;
  gap: 0.25rem;
}

.required {
  color: #dc2626;
  font-size: 1rem;
}

.input-field {
  width: 100%;
  padding: 0.75rem 1rem;
  font-size: 1rem;
  color: #333;
  background: white;
  border: 2px solid #A0E3EA;
  border-radius: 8px;
  transition: all 0.3s;
  outline: none;
}

.input-field:focus {
  border-color: #1B9AAA;
  box-shadow: 0 0 0 3px rgba(27, 154, 170, 0.1);
}

.input-field:hover:not(:disabled) {
  border-color: #1B9AAA;
}

.input-field::placeholder {
  color: #999;
}

.input-error {
  border-color: #dc2626 !important;
}

.input-error:focus {
  box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
}

.input-disabled {
  background: #f5f5f5;
  cursor: not-allowed;
  opacity: 0.6;
}

.error-message {
  font-size: 0.875rem;
  color: #dc2626;
  margin: 0;
}

.helper-text {
  font-size: 0.875rem;
  color: #666;
  margin: 0;
}
</style>