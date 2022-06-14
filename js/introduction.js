window.onload = function () {
    console.log('test! on load test test!');

    const folders = document.getElementsByClassName('introduction-title');
    const folderContent = document.getElementsByClassName('introduction-inner-item');
    const folderSetName = document.getElementById('introduction-folder-name');  //target for folder name
    const folderSetFileName = document.getElementById('introduction-folder-file-name'); //target for file name
    const fileNameList = document.getElementById('introduction-file-list');
    var ul = document.createElement('ul');

    // console.log(folders)
    // console.log(folderContent)
    console.log(folderContent[0].children)
    // console.log(folderContent[0])
    // console.log(fileNameList.innerHTML)




    if (folders.length){
        //set first active
        folderContent[0].classList.add('active')
        folderContent[0].children[0].classList.add('active')
        folderSetFileName.innerText = folderContent[0].getElementsByClassName('introduction-inner-item-title')[0].children[0].innerHTML;
        if (ul.children.length <= 0) {
            for (i = 0; i < folderContent[0].children.length; i++) {
                var li = document.createElement('li')
                li.innerHTML = folderContent[0]
                    .children[i]
                    .getElementsByClassName('introduction-inner-item-title')[0]
                    .children[0].innerHTML;
                ul.appendChild(li)
            }
            fileNameList.appendChild(ul);
        }
        //geef alle table of content ('folders') een dataset waarde
        for (i =0; i < folders.length; i++){
            folders[i].dataset.indexId = i;
            folders[i].dataset.folderName = folders[i].querySelector('#introduction-title').innerHTML;
        }
        //voor alle items in array folde, maak een foreach.
        Array.from(folders).map(folders => folders.addEventListener('click', (e) => {
            //set variables used in loop
            let currentFolderIndex = parseInt(folders.dataset['indexId']);  //index number of clicked category / folder

            // remove active class van gehele index
            for (i =0; i < folderContent.length; i++){
                folderContent[i].classList.remove('active')
            }
            //set folder active:
            folderContent[currentFolderIndex].classList.add('active')

            //set only first file active
            const filesInFolder = folderContent[currentFolderIndex].querySelectorAll('.introduction-inner-item-block');
            for (i=0; i < filesInFolder.length; i++){
                filesInFolder[i].classList.remove('active')
            }
            filesInFolder[0].classList.add('active')

            //set folder:
            folderSetName.innerText = folders.dataset['folderName'];

            //set file:
            folderSetFileName.innerText = folderContent[currentFolderIndex].getElementsByClassName('introduction-inner-item-title')[0].children[0].innerHTML;

            //find file list container and fill with new element 'ul'
            if (fileNameList.children.length > 0){
                // fileNameList.innerHTML = '';
                fileNameList.children[0].innerHTML = '';
            }

            //create list items for file list
            for (i=0; i < folderContent[currentFolderIndex].children.length; i++){
                var li = document.createElement('li')

                li.innerHTML = folderContent[currentFolderIndex]
                    .children[i]
                    .getElementsByClassName('introduction-inner-item-title')[0]
                    .children[0].innerHTML;
                ul.appendChild(li)
            }

            //set new file in folder.
            if (ul.children !== undefined){
                Array.from(ul.children).map(item => item.addEventListener('click', (e) => {
                    folderSetFileName.innerHTML = item.innerHTML;
                    const temp = folderContent[currentFolderIndex].getElementsByClassName('introduction-inner-item-block')

                    //remove all active files and set new clicked file as active.
                    for (i=0; i < temp.length; i++){
                        temp[i].classList.remove('active')
                        if (temp[i].children[0].children[0].innerHTML === item.innerHTML){
                            console.log('success')
                            temp[i].classList.add('active')
                        }
                    }
                }));
            }
            //append list with files within folder  ((maak lijst met file list))
            fileNameList.appendChild(ul);
        }));
    }
}

// function hiernaam(this of e){
// }

