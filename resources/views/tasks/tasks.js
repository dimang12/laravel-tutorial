document.addEventListener("DOMContentLoaded", function () {
    const dataset = [
        {
            task_id: "8943283",
            pro_name: "Project Enhancements",
            group_name: "Sprint 18 - 01/02/2024 to 01/16/2024",
            status: "In Progress",
            task_name: "STP: Enhancements the ability to lock or unlock a the entire STP based on user role",
            assigned: {
                img: "avatar.webp",
                name: "Makena Hartley"
            },
            created: {
                img: "avatar.png",
                name: "Makena Hartley"
            }
        },
        {
            task_id: "33432423",
            pro_name: "Production Defects",
            group_name: "Sprint 18 - 01/02/2024 to 01/16/2024",
            status: "Not Started",
            task_name: "JICE: UI and usage: data entry with line break and global variable style",
            assigned: {
                img: "avatar.webp",
                name: "Makena Hartley"
            },
            created: {
                img: "avatar.png",
                name: "Makena Hartley"
            }
        },
        {
            task_id: "3453453",
            pro_name: "Production Defects",
            group_name: "Sprint 18 - 01/02/2024 to 01/16/2024",
            status: "Done",
            task_name: "STP: shows All Nodes Completed in [0ms] in process time on php error log",
            assigned: {
                img: "avatar.webp",
                name: "Makena Hartley"
            },
            created: {
                img: "avatar.png",
                name: "Makena Hartley"
            }
        }
    ];

    function getPriorityTemplate(value) {
        if (!value) return;
        let status = "dhx-demo_grid-status--not-started";
        if (value === "Done") status = "dhx-demo_grid-status--done";
        if (value === "In Progress") status = "dhx-demo_grid-status--in-progress";
        return `
        <div class='dhx-demo_grid-template'>
            <div class='dhx-demo_grid-status ${status}'></div>
            <span>${value}</span>
        </div>
    `
    }

    const grid = new dhx.Grid("grid", {
        columns: [
            { id: "task_id", width: 200, header: [{ text: "#" }] },
            { id: "pro_name", width: 200, header: [{ text: "Project" }] },
            { id: "group_name", width: 280,  header: [{ text: "Group" }] },
            { id: "task_name", minWidth: 300, header: [{ text: "Task" }]},
            {
                width: 150, id: "status", header: [{ text: "Status" }],
                htmlEnable: true,
                template: value => getPriorityTemplate(value)
            },
            {
                width: 100, id: "assigned", header: [{ text: "Assigned", align: "center" }], align: "center",
                htmlEnable: true,
                template: function (user) {
                    return `<img class="img-thumbnail btn-40 rounded-circle" src="images/${user.img}" alt="${user.name}" />`;
                }
            },
            {
                width: 100, id: "created", header: [{ text: "Created", align: "center" }], align: "center",
                htmlEnable: true,
                template: function (user) {
                    return `<img class="img-thumbnail btn-40 rounded-circle" src="images/${user.img}" alt="${user.name}" />`;
                }
            }
        ],
        data: dataset,
        autoWidth: true,
        height: 500,
        rowHeight: 70,
        multiselection: true,
        css: "rounded",
        selection: "row",
    });

    // Bind event on submit form to add_new_task
    $('#new_task_form').on('submit', function(e) {
        e.preventDefault();

        const formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: '/tasks',
            data: formData,
            success: function(response) {
                console.log(response);
                // You can add more actions here based on the response
            },
            error: function(error) {
                console.log(error);
                // You can add more actions here based on the error
            }
        });
    });
});
