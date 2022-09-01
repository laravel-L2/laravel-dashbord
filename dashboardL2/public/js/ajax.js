//update et delete postes
$(document).ready(function ($) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $(".deleteOnePoste").on("click", function () {
        var poste = $(this).data("poste");
        let { id } = poste;
        if (
            confirm(`Voulez vous vraiment supprimer "${poste.titre}" ?`) == true
        ) {
            // ajax
            $.ajax({
                type: "DELETE",
                url: `http://localhost:8000/api/postes/${id}`,
                success: function (res) {
                    window.location.reload();
                },
            });
        }
    });
    //fonction pour passer les données dans le modal
    $(".editOnePoste").on("click", function () {
        var poste = $(this).data("posteedit");
        let { id, titre, add_poste_date, department, description } = poste;
        $(".modal-body #idPoste").val(id);
        $(".modal-body #titre").val(titre);
        $(".modal-body #date").val(add_poste_date);
        $(".modal-body #department").val(department);
        $(".modal-body #description").val(description);
    });

    //submit formulaires
    $("#submit_edit").on("click", function (event) {
        let titre = $("#titre").val();
        let date_ajout = $("#date").val();
        let department = $("#department").val();
        let description = $("#description").val();
        let idPoste = $("#idPoste").val();
        $.ajax({
            type: "PATCH",
            url: `http://localhost:8000/api/postes/${idPoste}`,
            data: {
                titre: titre,
                department: department,
                add_poste_date: date_ajout,
                description: description,
            },
            success: function (data) {
                window.location.reload();
            },
        });
    });

    /* Tâches */
    $(".deleteOneTask").on("click", function () {
        var task = $(this).data("task");
        let { id } = task;
        if (
            confirm(`Voulez vous vraiment supprimer "${task.titre}" ?`) == true
        ) {
            // ajax
            $.ajax({
                type: "DELETE",
                url: `http://localhost:8000/api/tasks/${id}`,
                success: function (res) {
                    window.location.reload();
                },
            });
        }
    });
    //fonction pour passer les données dans le modal
    $(".editOneTask").on("click", function () {
        var task = $(this).data("taskedit");
        let { id, titre, add_tache_date, department, description } = task;
        $(".modal-body #idTask").val(id);
        $(".modal-body #titreTask").val(titre);
        $(".modal-body #dateTask").val(add_tache_date);
        $(".modal-body #departmentTask").val(department);
        $(".modal-body #descriptionTask").val(description);
    });

    //submit formulaires
    $("#submit_edit_task").on("click", function (event) {
        let titre = $("#titreTask").val();
        let date_ajout = $("#dateTask").val();
        let department = $("#departmentTask").val();
        let description = $("#descriptionTask").val();
        let idTask = $("#idTask").val();
        $.ajax({
            type: "PATCH",
            url: `http://localhost:8000/api/tasks/${idTask}`,
            data: {
                titre: titre,
                department: department,
                add_tache_date: date_ajout,
                description: description,
            },
            success: function (data) {
                window.location.reload();
            },
        });
    });
});
