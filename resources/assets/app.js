/*
* This is the main JavaScript used by webpack to build the app.js file.
*/

if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
    document.getElementById('meta-color-scheme').setAttribute('content', 'dark');
} else {
    document.documentElement.classList.remove('dark')
}