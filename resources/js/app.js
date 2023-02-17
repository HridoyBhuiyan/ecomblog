import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



// Blog post schedule here

const myDomain = 'http://localhost:8000/'

document.getElementById('tagID').addEventListener('change', function() {
    let currentTagId = document.getElementById("tagID").value;
    let selectedTag = this.options[this.selectedIndex].text;
    let node = document.createElement('li');
    let hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'items[]');
    hiddenInput.setAttribute('value', currentTagId);
    node.appendChild(hiddenInput);

    let textnode = document.createTextNode(selectedTag);
    node.appendChild(textnode);
    document.getElementById('selectedTags').appendChild(node);

});


// Blog post related methods


document.getElementById("blogPostSchedule").addEventListener('click',function(){
        let title = document.getElementById('titleID').value
        let contentID = tinymce.get("contentID").getContent();
        let thumbnailID = document.getElementById('thumbnailID').files[0]
        let categoryID = document.getElementById('categoryID').value;

        let selectedTags = document.querySelectorAll('#selectedTags li input[type="hidden"]');
        let tags = Array.from(selectedTags).map(input => input.value);

        let slugID = document.getElementById('slugID').value;
        let metaTitleID = document.getElementById('metaTitleID').value;
        let metaDescriptionID = document.getElementById('metaDescriptionID').value;
        let scheduleTime = document.getElementById('scheduleTime').value;

        let formData = new FormData();
        formData.append("title", title)
        formData.append("contentID", contentID)
        formData.append("thumbnailID", thumbnailID)
        formData.append("categoryID", categoryID)
        formData.append("tags", tags)
        formData.append("slugID", slugID)
        formData.append("metaTitleID", metaTitleID)
        formData.append("metaDescriptionID", metaDescriptionID)
        formData.append("scheduleTime", scheduleTime)

        axios.post(myDomain+"admin/scheduledPost", formData,{ "Content-Type": "multipart/form-data" })
            .then((response)=>{
                if (response.status==200){
                    window.location.href = '/admin/blog?newschedule'
                }
                else{
                    alert("Make sure you are providing all the required informations !");
                }
            })
            .catch(error=>{
                if (error){
                    alert("Not scheduled ! Make sure you are providing all the required information !");
                }

            })
    }
)


document.getElementById('postDraft').addEventListener('click',function(){
    let title = document.getElementById('titleID').value
    let contentID = tinymce.get("contentID").getContent();
    let thumbnailID = document.getElementById('thumbnailID').files[0]
    let categoryID = document.getElementById('categoryID').value;

    let selectedTags = document.querySelectorAll('#selectedTags li input[type="hidden"]');
    let tags = Array.from(selectedTags).map(input => input.value);

    let slugID = document.getElementById('slugID').value;
    let metaTitleID = document.getElementById('metaTitleID').value;
    let metaDescriptionID = document.getElementById('metaDescriptionID').value;

    let formData = new FormData();
    formData.append("title", title)
    formData.append("contentID", contentID)
    formData.append("thumbnailID", thumbnailID)
    formData.append("categoryID", categoryID)
    formData.append("tags", tags)
    formData.append("slugID", slugID)
    formData.append("metaTitleID", metaTitleID)
    formData.append("metaDescriptionID", metaDescriptionID)

    axios.post(myDomain+"admin/draftPost", formData,{ "Content-Type": "multipart/form-data" })
        .then((response)=>{
            console.log(response.data)
            if (response.status==200){
                window.location.href = '/admin/blog?drafted'
            }
            else{
                alert("Make sure you are providing all the required informations !");
            }
        })
        .catch(error=>{
            if (error){
                alert("Make sure you are providing all the required informations !")
            }

        })
});


const selectedTags = document.getElementById("selectedTags");
selectedTags.addEventListener("click", function(event) {
    if (event.target.tagName === "LI") {
        event.target.remove();
    }
});


