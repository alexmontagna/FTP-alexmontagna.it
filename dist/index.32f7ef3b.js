const homeVideo = document.getElementById("home__video");
if (homeVideo) homeVideo.playbackRate = 0.5;
class MyHeader extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <header class="header">
            <h1>alex montagna</h1>
        </header>
        `;
    }
}
customElements.define("my-header", MyHeader);
class MyFooter extends HTMLElement {
    connectedCallback() {
        this.innerHTML = ``;
    }
}
customElements.define("my-footer", MyFooter);

//# sourceMappingURL=index.32f7ef3b.js.map
