console.log('scriptVanilla.js chargé')


document.addEventListener('DOMContentLoaded', () => {
    const closeModal = document.querySelector('.popup-close')
    const modal = document.querySelector('.popup-overlay')

    closeModal.addEventListener('click', () => {
        console.log("j'ai clique sur la croix", closeModal)
        modal.classList.add('close-modal');
    })
})


// const contact = document.querySelector('.contact-btn')
// 	// create li
