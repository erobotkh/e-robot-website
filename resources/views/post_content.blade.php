<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style type="text/tailwindcss">
    @layer utilities {
      body {
        font-family: "kantumruy pro", "typography";
      }
    }
  </style>

<body class="grid">
    <div class="grid place-self-center m-5 rounded-lg shadow-lg md:w-[800px] bg-[#F9EEEC] p-5">
        <div class="flex pb-5 px-5">
            <img src="https://img.freepik.com/premium-photo/japanese-girl-cherry-blossom-tree-landscape-anime-manga-illustration_691560-7776.jpg"
                alt="" class="w-[50px] h-[50px] rounded-full">
            <div>
                <h1 class="font-bold pt-3 pl-3">Kimlang</h1>
            </div>
        </div>
        <form action="/uploadtodatabase" method="post" class="md:w-[700px] place-self-center">
            <div class=" ">
                <div class="">
                    Pictures/Video
                </div>
                <div class=" lg:text-sm md:text-md text-md py-5">
                    <input type="file" name="image" multiple="multiple" />
                </div>
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
                    <button class="px-7 py-2 mt-1 rounded-md bg-[#635C5B] font-bold text-white">Back</button>
                    <button class="px-7 py-2 mt-1 rounded-md bg-[#B30F10] font-bold text-white">Upload</button>
                </div>
            </div>
        </form>
    </div>

    <script src="../js/script_post.js"></script>
</body>

</html>