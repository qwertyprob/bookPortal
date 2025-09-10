
async function apiFetch(url, options = {}) {
    const response = await fetch(url, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        },
        ...options
    });

    if (!response.ok) {
        throw new Error(`Ошибка: ${response.status}`);
    }

    return await response.json();
}

export { apiFetch };
