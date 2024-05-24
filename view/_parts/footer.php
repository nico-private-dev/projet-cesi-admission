<footer class="w-100 bg-primary d-flex justify-content-center py-2 mt-5 footer-site">
    <span class="text-white">&copy; projet pédagogique</span>
</footer>







<script src="./public/js/bootstrap.min.js"></script>

<!-- Affiche du formulaire de modification d'offres -->
<script>
    document.getElementById('selectJobOffer').addEventListener('change', function() {
        var jobId = this.value;
        if (jobId) {
            var jobOffers = <?php echo json_encode($jobOffers); ?>;
            var selectedJob = jobOffers.find(job => job.id == jobId);

            if (selectedJob) {
                document.getElementById('title').value = selectedJob.title;
                document.getElementById('start_date').value = selectedJob.start_date;
                document.getElementById('location').value = selectedJob.location;
                document.getElementById('salary').value = selectedJob.salary;
                document.getElementById('type').value = selectedJob.type;
                document.getElementById('appearance').value = selectedJob.appearance;
                document.getElementById('link').value = selectedJob.link;
                document.getElementById('short_description').value = selectedJob.short_description;
                document.getElementById('long_description').value = selectedJob.long_description;
                document.getElementById('jobOfferFields').style.display = 'block';
            }
        } else {
            document.getElementById('jobOfferFields').style.display = 'none';
        }
    });
</script>

</body>

</html>