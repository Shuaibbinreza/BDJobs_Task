<x-default-layout>
    <header class="container-body">
        <ul class="nav nav-pills my-3 justify-content-between col-auto bg-light mx-auto" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active px-5" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="true"><i class="fa-solid fa-user"></i> <br> Personal </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i
                        class="fa-solid fa-graduation-cap"></i><br> Education/Training</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-employment-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-employment" type="button" role="tab" aria-controls="pills-employment"
                    aria-selected="false"><i class="fa-solid fa-clipboard-user"></i> <br>Employment</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-information-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-information" type="button" role="tab" aria-controls="pills-information"
                    aria-selected="false"><i class="fa-solid fa-bars"></i><br> Other Information</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-accomplishment-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-accomplishment" type="button" role="tab" aria-controls="pills-accomplishment"
                    aria-selected="false"><i class="fa-solid fa-book-atlas"></i> <br> Accomplishment</button>
            </li>
        </ul>
    </header>
    
    <main class="container-body">
        <div class="tab-content" id="pills-tabContent">
            <!-- personal part -->
            
            @include('components.PersonalPart.personal')

            <!-- Education/Training part -->

            @include('components.EducationTraining.eduTrain')

            <!-- Employment part -->
            
            @include('components.EmploymentPart.employment')

            <!-- Other Information part -->
            
            @include('components.OtherinfoPart.otherInfos')

            <!-- Accomplishment part -->
            @include('components.Accomplishment.accomplishment')

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script>
        document.getElementById("addEducationBtn").addEventListener("click", function () {
            document.getElementById("educationForm").style.display = "block";
        });
        document.getElementById("cancelEducationBtn").addEventListener("click", function () {
            document.getElementById("educationForm").style.display = "none";
        });
    </script>


    <!-- For Training -->
    <script>
        document.getElementById("addTrainingBtn").addEventListener("click", function () {
            document.getElementById("trainingForm").style.display = "block";
            document.getElementById("trainingSummary").style.display = "none"
        });

        document.getElementById("cancelTrainingBtn").addEventListener("click", function () {
            document.getElementById("trainingForm").style.display = "none";
            document.getElementById("trainingSummary").style.display = "block"
        });
    </script>

    <!-- For Emoloyment History -->
    <script>
        document.getElementById("addEmploymentHistorybtn").addEventListener("click", function () {
            document.getElementById("employmentHistory").style.display = "block";
            document.getElementById("experienceSummary").style.display = "none";
        });

        document.getElementById("cancelHistorybtn").addEventListener("click", function () {
            document.getElementById("employmentHistory").style.display = "none";
            document.getElementById("experienceSummary").style.display = "block";
        });
    </script>

    <!-- For Certification -->
    <script>
        document.getElementById("addCertificationBtn").addEventListener("click", function () {
            document.getElementById("certificationForm").style.display = "block";
            document.getElementById("certificationSummary").style.display = "none";
        });

        document.getElementById("cancelCertificationBtn").addEventListener("click", function () {
            document.getElementById("certificationForm").style.display = "none";
            document.getElementById("certificationSummary").style.display = "block";

        });
    </script>
    <!-- For Language -->
    <script>
        document.getElementById("addLanguagebtn").addEventListener("click", function () {
            document.getElementById("languageAdd").style.display = "block";
            document.getElementById("languageSummary").style.display = "none";
        });

        document.getElementById("cancelbtn").addEventListener("click", function () {
            document.getElementById("languageAdd").style.display = "none";
            document.getElementById("languageSummary").style.display = "block";
        });
    </script>

    <!-- For Account -->

    <script>
        document.getElementById("linkAccountbtn").addEventListener("click", function () {
            document.getElementById("accountAdd").style.display = "block";
            document.getElementById("accountSummary").style.display = "none";
        });

        document.getElementById("canceladdbtn").addEventListener("click", function () {
            document.getElementById("accountAdd").style.display = "none";
            document.getElementById("accountSummary").style.display = "block";
        });
    </script>

    <!-- For Reference -->
    <script>
        document.getElementById("referanceAddBTN").addEventListener("click", function () {
            document.getElementById("referenceAdd").style.display = "block";
            document.getElementById("referenceSummary").style.display = "none";
        });

        document.getElementById("referanceCancelBtn").addEventListener("click", function () {
            document.getElementById("referenceAdd").style.display = "none";
            document.getElementById("referenceSummary").style.display = "block";
        });
    </script>
    <!-- For Accomplishment  -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // For Portfolio
            var addPortfolioBtn = document.getElementById("addPortfolioBtn");
            var portfolioForm = document.getElementById("portfolioForm");
            var cancelPortfolioBtn = document.getElementById("cancelPortfolioBtn");
            var activeForm = document.getElementById("activeForm");

            var accomplishmentText = document.getElementById("accomplishmentText");
            // For Publications
            var addPublicationsBtn = document.getElementById("addPublicationsBtn");
            var publicationActiveForm = document.getElementById("publicationActiveForm")
            var publicationForm = document.getElementById("publicationForm");
            var cancelPublicationBtn = document.getElementById("cancelPublicationBtn");

            // For Awards/ Honors

            var awardActiveForm = document.getElementById("awardActiveForm");
            var awardForm = document.getElementById("awardForm");
            var cancelAwardBtn = document.getElementById("cancelAwardBtn");
            var addAwardsBtn = document.getElementById("addAwardsBtn");

            // For Projects

            var projectActiveForm = document.getElementById("projectActiveForm");
            var projectForm = document.getElementById("projectForm");
            var cancelProjectBtn = document.getElementById("cancelProjectBtn");
            var addProjectBtn = document.getElementById("addProjectBtn");

            // For Others

            var othersActiveForm = document.getElementById("othersActiveForm");
            var othersForm = document.getElementById("othersForm");
            var cancelOthersBtn = document.getElementById("cancelOthersBtn");
            var addOthersBtn = document.getElementById("addOthersBtn");

            // For Portfolio
            addPortfolioBtn.addEventListener("click", function () {
                addPortfolioBtn.style.display = "none";
                addPublicationsBtn.style.display = "none";
                addAwardsBtn.style.display = "none";
                addProjectBtn.style.display = "none";
                addOthersBtn.style.display = "none";
                portfolioForm.style.display = "block";
                activeForm.style.width = "100%";
                accomplishmentText.style.display = "none";
                publicationForm.style.display = "none";
            });

            cancelPortfolioBtn.addEventListener("click", function () {
                addPortfolioBtn.style.display = "block";
                addPublicationsBtn.style.display = "block";
                addAwardsBtn.style.display = "block"
                addProjectBtn.style.display = "block";
                addOthersBtn.style.display = "block";
                portfolioForm.style.display = "none";
                accomplishmentText.style.display = "block";
                activeForm.style.width = "";

            });

            // For Publications
            addPublicationsBtn.addEventListener("click", function () {
                addPublicationsBtn.style.display = "none";
                addPortfolioBtn.style.display = "none";
                addAwardsBtn.style.display = "none";
                addProjectBtn.style.display = "none";
                addOthersBtn.style.display = "none";
                publicationForm.style.display = "block";
                publicationActiveForm.style.width = "100%";
                accomplishmentText.style.display = "none";
                portfolioForm.style.display = "none";
            });

            cancelPublicationBtn.addEventListener("click", function () {
                addPortfolioBtn.style.display = "block";
                addPublicationsBtn.style.display = "block";
                addAwardsBtn.style.display = "block"
                addProjectBtn.style.display = "block";
                addOthersBtn.style.display = "block";
                publicationForm.style.display = "none";
                accomplishmentText.style.display = "block";
                publicationActiveForm.style.width = "";

            });

            // For Awards/ Honors
            addAwardsBtn.addEventListener("click", function () {
                addPublicationsBtn.style.display = "none";
                addPortfolioBtn.style.display = "none";
                addAwardsBtn.style.display = "none";
                addProjectBtn.style.display = "none";
                addOthersBtn.style.display = "none";
                awardForm.style.display = "block";
                awardActiveForm.style.width = "100%";
                accomplishmentText.style.display = "none";
                // portfolioForm.style.display = "none";
            });

            cancelAwardBtn.addEventListener("click", function () {
                addPortfolioBtn.style.display = "block";
                addPublicationsBtn.style.display = "block";
                addAwardsBtn.style.display = "block"
                addProjectBtn.style.display = "block";
                addOthersBtn.style.display = "block";
                awardForm.style.display = "none";
                accomplishmentText.style.display = "block";
                awardActiveForm.style.width = "";

            });


            // Projects
            addProjectBtn.addEventListener("click", function () {
                addPublicationsBtn.style.display = "none";
                addPortfolioBtn.style.display = "none";
                addAwardsBtn.style.display = "none";
                addProjectBtn.style.display = "none";
                addOthersBtn.style.display = "none";
                projectForm.style.display = "block";
                projectActiveForm.style.width = "100%";
                accomplishmentText.style.display = "none";
                // portfolioForm.style.display = "none";
            });

            cancelProjectBtn.addEventListener("click", function () {
                addPortfolioBtn.style.display = "block";
                addPublicationsBtn.style.display = "block";
                addAwardsBtn.style.display = "block"
                addProjectBtn.style.display = "block";
                addOthersBtn.style.display = "block";
                projectForm.style.display = "none";
                accomplishmentText.style.display = "block";
                projectActiveForm.style.width = "";

            });

            // For Others
            addOthersBtn.addEventListener("click", function () {
                addPublicationsBtn.style.display = "none";
                addPortfolioBtn.style.display = "none";
                addAwardsBtn.style.display = "none";
                addProjectBtn.style.display = "none";
                addOthersBtn.style.display = "none";
                othersForm.style.display = "block";
                othersActiveForm.style.width = "100%";
                accomplishmentText.style.display = "none";
                // portfolioForm.style.display = "none";
            });

            cancelOthersBtn.addEventListener("click", function () {
                addPortfolioBtn.style.display = "block";
                addPublicationsBtn.style.display = "block";
                addAwardsBtn.style.display = "block"
                addProjectBtn.style.display = "block";
                addOthersBtn.style.display = "block";
                othersForm.style.display = "none";
                accomplishmentText.style.display = "block";
                othersActiveForm.style.width = "";

            });
        });
    </script>
</x-default-layout>