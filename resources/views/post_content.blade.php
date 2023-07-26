<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<style type="text/tailwindcss">
    @layer utilities {
      body {
        font-family: "Open Sans", "typography";
      }
    }
  </style>

<body class="grid">
    <div class="grid place-self-center m-5 rounded-lg shadow-lg md:w-[800px] bg-[#E1E1E1] p-5">
        <div class="flex pb-5 px-5 justify-between">
            <div class="flex">
                <img src="https://img.freepik.com/premium-photo/japanese-girl-cherry-blossom-tree-landscape-anime-manga-illustration_691560-7776.jpg"
                    alt="" class="w-[50px] h-[50px] rounded-full">
                <div>
                    <h1 class="font-bold pt-3 pl-3 text-xl">Kimlang</h1>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-backspace cursor-pointer" viewBox="0 0 16 16" id="IconChangeColor">
                <path
                    d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"
                    id="mainIconPathAttribute"></path>
                <path
                    d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z"
                    id="mainIconPathAttribute"></path>
            </svg>
        </div>
        <form action="/uploadtodatabase" method="post" class="md:w-[700px] place-self-center">
            <div class=" ">
                <div class="">
                    Pictures/Video
                </div>
                <div class="flex">
                    <input type="file" id="file-input" name="image" multiple="multiple" class="hidden" />
                    <label for="file-input"
                        class="my-5 p-5 hover:bg-[#E1E1E1] hover:text-black transition-all duration-500 bg-[#978E8D] border-[#EB0100] text-white rounded-lg border-2 text-center cursor-pointer">
                        <i class="fa-solid fa-file-arrow-up"></i>&nbsp; Choose Photos or Videos to upload
                    </label>
                    <ul id="files-list" class="py-10 mx-5">

                    </ul>
                </div>

                <div class="">
                    <div class="">
                        Write something:
                    </div>
                    <div class="py-5">
                        <input
                            class="hover:border-red-600 focus:ring-red-600 focus:border-red-600 p-3 w-full h-full text-lg placeholder:text-lg border-2 rounded-lg"
                            type="textarea" name="caption" placeholder="What's on your mind?" maxlength="1000" />
                    </div>
                    <div>
                        <a href="#"><button
                                class="px-7 py-2 mt-1 mr-5 rounded-md bg-[#000] font-bold text-white">Back</button></a>
                        <button class="px-7 py-2 mt-1 mr-5 rounded-md bg-[#EB0100] font-bold text-white">Upload</button>
                    </div>
                </div>
        </form>
    </div>

    <script>
    let fileInput = document.getElementById("file-input");
    let fileList = document.getElementById("files-list");
    let numOfFiles = document.getElementById("num-of-files");

    fileInput.addEventListener("change", () => {
        fileList.innerHTML = `${fileInput.files.length} 
        Files Selected`;
        numOfFiles.innerHTML = ` `;
    })
    </script>
</body>

</html>