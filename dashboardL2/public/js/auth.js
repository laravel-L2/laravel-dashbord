// ======================= JAVASSCRIPT AUTHENTIFICATION =======================
$(document).ready(() => {
    const baseUrl = "http://localhost:8000";

    $("#page_section").load("section-auth #authentifier");

    $(document).on("click", "#inscrire_section", () => {
        $("#page_section").load("section-auth #inscrire");
    });

    $(document).on("click", "#connecter_section", () => {
        $("#page_section").load("section-auth #authentifier");
    });

    $(document).on("click", '#connexion', (e) => {
        e.preventDefault();
        let donnees_signin = {
            "email": $("#identifiant_signin").val(),
            "password": $("#password_signin").val()
        };
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: `${ baseUrl }/api/auth`,
            data: donnees_signin,
            success: (data, status) => {
                if(status === "success") {
                    localStorage.setItem("laravel_L2", data.access_token);
                    window.location.href = "/dash";
                }
            },
            error: () => {
                $("#messages").text(`
                     Identifiants incorrects !
                `);
                $("#modal_message").modal("show");
            }
        });
    });

    $(document).on("click", "#valider_signup", (e) => {
        e.preventDefault();
        let donnees_signup = {
            "name": $("#nom_signup").val(),
            "email": $("#email_signup").val(),
            "password": $("#password_signup").val()
        };
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: `${ baseUrl }/api/create`,
            data: donnees_signup,
            success: (data, status) => {
                if(status === "success") {
                    $.ajax({
                        type: "POST",
                        dataType: 'json',
                        url: `${ baseUrl }/api/auth`,
                        data: donnees_signup,
                        success: (data, status) => {
                            if(status === "success") {
                                localStorage.setItem("laravel_L2", data.access_token);
                                window.location.href = "/dash";
                            }
                        }
                    });
                }
            },
            error: () => {
                $("#messages").text(`
                     Tous les champs sont requis !
                `);
                $("#modal_message").modal("show");
            }
        });
    });
});
