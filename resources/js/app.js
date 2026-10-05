import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('[data-generate-form]');
    const submitButton = document.querySelector('[data-submit-button]');
    const textarea = document.querySelector('[data-counter]');
    const counter = document.querySelector('[data-counter-target]');
    const copyButton = document.querySelector('[data-copy]');

    if (textarea && counter) {
        const updateCounter = () => {
            counter.textContent = textarea.value.length;
        };
        textarea.addEventListener('input', updateCounter);
        updateCounter();
    }

    if (form && submitButton) {
        form.addEventListener('submit', () => {
            submitButton.disabled = true;
            submitButton.innerHTML = `
                <svg class="h-5 w-5 animate-spin" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                </svg>
                <span>Üretiliyor...</span>`;
        });
    }

    if (copyButton) {
        copyButton.addEventListener('click', async () => {
            const text = document.getElementById('result-text').textContent.trim();
            await navigator.clipboard.writeText(text);
            copyButton.textContent = 'Kopyalandı!';
            setTimeout(() => (copyButton.textContent = 'Kopyala'), 2000);
        });
    }
});