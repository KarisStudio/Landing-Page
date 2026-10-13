document.addEventListener('alpine:init', () => {
    Alpine.data('projectModal', () => ({
        isOpen: false,
        activeProject: {},
        activeImage: '',

        openModal(project, initialImage) {
            this.activeProject = project;
            // Gunakan gambar yang dikirim dari card atau gambar pertama dari array
            this.activeImage = initialImage || (project.image && project.image.length > 0 ? project.image[0] : '');
            this.isOpen = true;
        },

        nextImage() {
            let rawImgs = this.activeProject.image || this.activeProject.images || [];
            if (rawImgs.length <= 1) return;
            
            let idx = rawImgs.indexOf(this.activeImage);
            if (idx === -1) idx = 0;
            this.activeImage = rawImgs[(idx + 1) % rawImgs.length];
        },
    }));
});