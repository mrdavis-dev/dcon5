            // funcion para generar link
            function genlink() {
                var inputVal = document.getElementById("myInput").value;
                var add = "https://wa.me/507" + inputVal
                document.getElementById("input").innerHTML = add;
                document.getElementById("input").value = add;

                document.getElementById("res").style.display = "block";
            }

            // copy link
            document.getElementById('clipboardCopy').addEventListener('click', clipboardCopy);
            async function clipboardCopy() {
                let text = document.querySelector("#input").value;
                await navigator.clipboard.writeText(text);
                Swal.fire('link copiado')
            }