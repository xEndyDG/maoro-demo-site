window.onload = function () {
    console.log('test! on load test test!');

    const folders = document.getElementsByClassName('introduction-header-content-item');
    const folderContent = document.getElementsByClassName('introduction-inner-item');


    if (folders.length){

        folderContent[0].classList.add('active')
        //geef alle table of content ('folders') een dataset waarde
        for (i =0; i < folders.length; i++){
            folders[i].dataset.indexId = i + 1;
            folders[i].dataset.folderName = folders[i].querySelector('.title').innerHTML;
        }
        //voor alle items in array folde, maak een foreach.
        Array.from(folders).map(folders => folders.addEventListener('click', (e) => {
            //debug info
            // console.log(parseInt(folders.dataset['indexId']))
            // parseInt(folders.dataset['indexId'])
            // e.target.closest('.introduction-header-content-item')


            const folderSetName = document.getElementById('introduction-folder-name');
            const folderSetFileName = document.getElementById('introduction-folder-file-name');

            // remove active class van gehele index
            for (i =0; i < folderContent.length; i++){
                folderContent[i].classList.remove('active')
            }
            //set folder active:
            folderContent[parseInt(folders.dataset['indexId'])].classList.add('active')

            //set folder:
            folderSetName.innerText = folders.dataset['folderName'];

            //set file:
            // console.log(folderContent[parseInt(folders.dataset['indexId'])].getElementsByClassName('introduction-inner-item-title')[0].children[0].innerHTML);
            folderSetFileName.innerText = folderContent[parseInt(folders.dataset['indexId'])].getElementsByClassName('introduction-inner-item-title')[0].children[0].innerHTML;

            //van
            // console.log(folderContent[parseInt(folders.dataset['indexId'])]);


            const fileList = document.getElementById('introduction-file-list');
            var ul = document.createElement('ul');
            console.log(ul)
            if (fileList.children.length > 0){
                console.log(ul)
                delete ul;
                console.log(ul)
            }
            for (i=0; i < folderContent[parseInt(folders.dataset['indexId'])].children.length; i++){
                var li = document.createElement('li')
                li.innerHTML = folderContent[parseInt(folders.dataset['indexId'])]
                    .children[i]
                    .getElementsByClassName('introduction-inner-item-title')[0]
                    .children[0].innerHTML;
                ul.appendChild(li)
            }
            fileList.appendChild(ul);
        }));
    }
}

// function hiernaam(this of e){
// }

