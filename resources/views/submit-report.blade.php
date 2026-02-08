@extends('layouts.app')

@section('title', 'Gestão de Utilizadores')

@section('content')
<div class="container-fluid py-5">
  <h2 class="text-center mb-4"><i class="fa-solid fa-chart-simple me-2"></i>Registo de denuncias</h2>
  <form id="reportForm" class="theme-form" enctype="multipart/form-data">  
    <div class="form-section form-step" data-step="3" data-step-title="Dados do Agressor">
        <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Titulo</label>
            <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-user-secret"></i></span>
            <input type="text" id="title"  name="title" class="form-control" placeholder="Titulo">
            </div>
        </div>
        <div class="col-md-6">
        <label class="form-label">Província / Cidade</label>
        <select id="provinceSelect" class="form-select">
            <option value="">Selecione a província</option>
        </select>
        </div>
        <div class="col-md-6">
        <label class="form-label">Distrito</label>
        <select id="districtSelect" name="district_id" class="form-select">
            <option value="">Selecione o distrito</option>
        </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Contacto (Telefone/WhatsApp)</label>
            <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
            <input type="tel" class="form-control" id="aggressor_phone_number" placeholder="+258 xxx xxx xxx">
            </div>
        </div>
        <div class="col-12">
            <label class="form-label">Descricao</label>
            <textarea class="form-control" rows="3" id="description" name="description" placeholder="Informacao detalhada da denuncia..."></textarea>
        </div>

        <div class="col-12 mt-4">
        <label class="form-label">Evidência de Áudio (opcional)</label>
        <p class="text-muted small">Pode gravar um áudio agora ou anexar um ficheiro existente (mp3, wav, m4a, etc).</p>

        <!-- Área de gravação -->
        <div class="mb-3">
            <button type="button" id="startRecording" class="btn btn-outline-primary">
                <i class="fa-solid fa-microphone"></i> Iniciar Gravação
            </button>
            <button type="button" id="stopRecording" class="btn btn-outline-danger" disabled>
                <i class="fa-solid fa-stop"></i> Parar Gravação
            </button>
            <button type="button" id="clearAudio" class="btn btn-outline-secondary" disabled>
                Limpar
            </button>
        </div>

        <!-- Player para pré-visualizar o áudio -->
        <audio id="audioPreview" controls class="w-100 mb-3" style="display: none;"></audio>

        <!-- Ou anexar ficheiro -->
        <div class="mb-3">
            <label for="audioFile" class="form-label">Ou selecione um ficheiro de áudio</label>
            <input type="file" id="audioFile" name="audio" accept="audio/*" class="form-control">
        </div>

        <!-- Campo hidden que vai receber o blob da gravação -->
        <input type="hidden" name="recordedAudioData" id="recordedAudioData">

        <div class="mt-4">
            <button type="submit" id="submitCaseBtn" class="btn btn-primary btn-lg">
                Enviar Denúncia
            </button>
        </div>
        </div>
        </div>
    </div>
  </form>
</div>


@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    $('.js-example-basic-single').select2({
      placeholder: "Selecione uma opção",
      width: '100%'
    });
  });
</script>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <!-- <script src="../assets/js/sidebar-menu.js"></script> -->
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="../assets/js/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2/select2-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const complete_sumary = document.getElementById('complete_sumary');
        const last_change = document.getElementById('last_change');
        const case_worker = document.getElementById('case_worker');
        const consolidated_details = document.getElementById('consolidated_details');
        
      
      
      
        const reporter_name = document.getElementById('reporter_name');
        const reporter_birth_date = document.getElementById('reporter_birth_date');
        const reporter_gender = document.getElementById('reporter_gender');
        const reporter_phone_number = document.getElementById('reporter_phone_number');
        
        const relationWithVictim = document.getElementById('relationWithVictim');
        const detailed_report = document.getElementById('detailed_report');
        const adition_notes = document.getElementById('adition_notes');
        const reporter_availability = document.getElementById('reporter_availability');
        const third_party_description = document.getElementById('third_party_description')
        const provinceSelect = document.getElementById('provinceSelect');
        const aggressor_name = document.getElementById('aggressor_name');
        const aggressor_birth_date = document.getElementById('aggressor_birth_date');
        const aggressor_gender = document.getElementById('aggressor_gender');
        const relationWithVictimAgressor = document.getElementById('relationWithVictimAgressor');
        const aggressor_address = document.getElementById('aggressor_address');
        const aggressor_phone_number = document.getElementById('aggressor_phone_number')
        const aggressor_id_number = document.getElementById('aggressor_id_number');
        const aggressor_history = document.getElementById('aggressor_history')
        const reportNumber = document.getElementById('reportNumber');
        const districtSelect = document.getElementById('districtSelect');
        const additionalObservations = document.getElementById('additionalObservations');
        const affected_people_name = document.getElementById('afected_people_name');
        const affected_people_date_of_birth = document.getElementById('afected_people_date_of_birth');
        const affected_people_gender = document.getElementById('afected_people_gender');
        const affected_people_address = document.getElementById('afected_people_address');
        const healthStatusSelect = document.getElementById('healthStatusSelect')
        const affected_person_id = document.getElementById('affected_person_id')
        const representative_phone_number = document.getElementById('representative_phone_number')
        const representative_name = document.getElementById('representative_name')
        const aggressor_important_observation = document.getElementById('aggressor_important_observation');
        const affected_people_phone_numeber = document.getElementById('afected_people_phone_numeber');
        const affected_people_needs_special_assistance = document.getElementById('afected_people_needs_special_assistance');
        const affected_people_special_assistance_description = document.getElementById('young_people_observations');
        const institutionSelect = document.getElementById('institutionSelect');
        const reportDate = document.getElementById('reportDate');
        // const reporter_phone_number = document.getElementById('reporterContact');
        
        const third_party_email = document.getElementById('thirdPartyEmail');
        const timeDate = document.getElementById('timeDate');
        const reporterName = document.getElementById('reporterName');
        const reporterContact = document.getElementById('reporterContact');
        const reportDescription = document.getElementById('reportDescription');
        const kinshipSelect = document.getElementById('kinshipSelect');
        const statusSelect = document.getElementById('statusSelect');
        const thirdPartySelect = document.getElementById('thirdPartySelect');
        const afected_people_gender = document.getElementById('afected_people_gender');
        // const reportDescription = document.getElementById('reportDescription');
        const submission_chanel = document.getElementById('submission_chanel');
        const formSteps = Array.from(document.querySelectorAll('.form-step'));
        const stepperWrapper = document.querySelector('.stepper-wrapper');
        const prevStepBtn = document.getElementById('prevStep');
        const nextStepBtn = document.getElementById('nextStep');
        const updateCaseBtn = document.getElementById('updateCaseBtn');
        const submitCaseBtn = document.getElementById('submitCaseBtn');
        const thirdPartyContact = document.getElementById('thirdPartyContact');
        const thirdPartyEmail = document.getElementById('thirdPartyEmail');
        // --- Funcionalidade de Gravação de Áudio ---
    // --- Funcionalidade de Gravação de Áudio ---
let mediaRecorder;
let audioChunks = [];
let audioBlob = null;

const startBtn = document.getElementById('startRecording');
const stopBtn  = document.getElementById('stopRecording');
const clearBtn = document.getElementById('clearAudio');
const audioPreview = document.getElementById('audioPreview');
const audioFileInput = document.getElementById('audioFile');  // ← este é o input que vamos usar

async function startRecording() {
    try {
        const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
        mediaRecorder = new MediaRecorder(stream);
        audioChunks = [];

        mediaRecorder.ondataavailable = e => {
            audioChunks.push(e.data);
        };

        mediaRecorder.onstop = () => {
            audioBlob = new Blob(audioChunks, { type: 'audio/webm' });
            const audioUrl = URL.createObjectURL(audioBlob);

            audioPreview.src = audioUrl;
            audioPreview.style.display = 'block';

            // Criar um objeto File a partir do Blob
            const fileName = `gravacao_${new Date().toISOString().replace(/[:.]/g, '-')}.webm`;
            const audioFile = new File([audioBlob], fileName, { type: 'audio/webm' });

            // Criar um DataTransfer e adicionar o arquivo
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(audioFile);

            // Atribuir ao input file
            audioFileInput.files = dataTransfer.files;

            // Limpar variável global se você estiver usando
            window.currentAudioFile = null;

            stopBtn.disabled = true;
            startBtn.disabled = false;
            clearBtn.disabled = false;

            // Limpar o stream do microfone
            stream.getTracks().forEach(track => track.stop());

            Swal.fire({
                icon: 'success',
                title: 'Gravação concluída',
                text: 'O áudio foi adicionado ao campo de ficheiro.',
                timer: 2000,
                showConfirmButton: false
            });
        };

        mediaRecorder.start();
        startBtn.disabled = true;
        stopBtn.disabled = false;
        Swal.fire('Gravação iniciada', 'Fale agora...', 'info');
    } catch (err) {
        console.error('Erro ao acessar microfone:', err);
        Swal.fire('Erro', 'Não foi possível acessar o microfone. Verifique permissões.', 'error');
    }
}

function stopRecording() {
    if (mediaRecorder && mediaRecorder.state !== 'inactive') {
        mediaRecorder.stop();
    }
}

function clearAudio() {
    audioPreview.src = '';
    audioPreview.style.display = 'none';
    audioFileInput.value = '';           // ← limpa o input file
    window.currentAudioFile = null;
    clearBtn.disabled = true;
    startBtn.disabled = false;
    stopBtn.disabled = true;
}

// Eventos dos botões
startBtn.addEventListener('click', startRecording);
stopBtn.addEventListener('click', stopRecording);
clearBtn.addEventListener('click', clearAudio);

// Quando o usuário seleciona um arquivo manualmente
audioFileInput.addEventListener('change', (e) => {
    const file = e.target.files[0];
    if (file) {
        // Limpa qualquer gravação anterior (opcional)
        // clearAudio();  ← descomente se quiser sempre limpar ao selecionar novo arquivo

        const url = URL.createObjectURL(file);
        audioPreview.src = url;
        audioPreview.style.display = 'block';
    }
});
        const thirdPartyDescription = document.getElementById('third_party_description');
        let currentStepIndex = 0;
        let currentDistrictId = null;

        // const provincesToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJmcmVzaCI6ZmFsc2UsImlhdCI6MTc2MzkxMTg2NywianRpIjoiNDAwOWJiMTMtOGQxOS00OGY3LWI2ZmItNzIxYjFjYTkzYjk2IiwidHlwZSI6ImFjY2VzcyIsInN1YiI6IjEiLCJuYmYiOjE3NjMzkxMTg2NywiZXhwIjoxNzYzMzkxNTQ2N30.DWjBP2eF-NkN5nywHH5kXk2O3NrcVZ2XA9nsz24MjYM';
        // const reportToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJmcmVzaCI6ZmFsc2UsImlhdCI6MTc2NTc0MjMyMiwianRpIjoiYWNiOTI2MjQtYjE0OS00NzJlLWEzZjEtYTEwNmQ4NWUyZTAzIiwidHlwZSI6ImFjY2VzcyIsInN1YiI6IjEiLCJuYmYiOjE3NjU3NDIzMjIsImV4cCI6MTc2NTc0NTkyMn0.AGhkBWNQVEY4G-u36jaTP1zerG-X9wU6ROk830FEgb8';
        const token = localStorage.getItem('auth_token');
        if (!token) { Swal.fire('Erro', 'Faça login primeiro.', 'error'); return; }



       // Load all form options from API
     if (token) {
         $.ajax({
             url:'{{ env("API_OPTIONS") }}',
             type: 'GET',
             headers: {
                 'Authorization': `Bearer ${token}`,
                 'Content-Type': 'application/json'
             },
             success: function(response) {
                 if (response.status === 200 && response.data) {
                     const data = response.data;
                     
                     // Populate Provinces
                     const provinceSelect = $('#provinceSelect');
                     provinceSelect.empty().append('<option value="">Selecione a província</option>');
                     if (data.provinces) {
                         data.provinces.forEach(function(province) {
                             provinceSelect.append(new Option(province.name, province.id));
                         });
                     }
                     
                     // Populate Districts (will be filtered by province)
                     window.allDistricts = data.districts || [];
                     
                     // Populate Priorities
                     const prioritySelect = $('#prioritySelect');
                     prioritySelect.empty().append('<option selected disabled>Selecione a urgência</option>');
                     if (data.priorities) {
                         data.priorities.forEach(function(priority) {
                             prioritySelect.append(new Option(priority.name, priority.id));
                         });
                     }

                     const aggressor_historySelect = $('#aggressor_history');
                     aggressor_historySelect.empty().append('<option selected disabled>Selecione os crimes</option>');
                     if (data.Crimes) {
                         data.Crimes.forEach(function(crime) {
                          aggressor_historySelect.append(new Option(crime.name, crime.id));
                         });
                     }
                     
                     // Populate Statuses
                     const statusSelect = $('#statusSelect');
                     statusSelect.empty().append('<option selected disabled>Selecione a situação</option>');
                     if (data.statuses) {
                         data.statuses.forEach(function(status) {
                             statusSelect.append(new Option(status.name, status.id));
                         });
                     }

                     const thirdPartySelect = $('#thirdPartySelect');
                     thirdPartySelect.empty().append('<option selected disabled>Selecione a Instituicão</optaion>');
                     if (data.institutions) {
                         data.institutions.forEach(function(status) {
                          thirdPartySelect.append(new Option(status.name, status.id));
                         });
                     }
                     
                     // Populate Health Statuses
                     const healthStatusSelect = $('#healthStatusSelect');
                     healthStatusSelect.empty().append('<option selected disabled>Selecione o estado de saúde</option>');
                     if (data.health_statuses) {
                         data.health_statuses.forEach(function(healthStatus) {
                             healthStatusSelect.append(new Option(healthStatus.name, healthStatus.id));
                         });
                     }
                     
                     // Populate Kinships
                     const kinshipSelect = $('#kinshipSelect');
                     kinshipSelect.empty().append('<option selected disabled>Selecione o parentesco</option>');
                     if (data.kinships) {
                         data.kinships.forEach(function(kinship) {
                             kinshipSelect.append(new Option(kinship.name, kinship.id));
                         });
                     }
                     const relationWithVictimAgressor = $('#relationWithVictimAgressor');
                     relationWithVictimAgressor.empty().append('<option selected disabled>Selecione o parentesco</option>');
                     if (data.kinships) {
                         data.kinships.forEach(function(kinship) {
                          relationWithVictimAgressor.append(new Option(kinship.name, kinship.id));
                         });
                     }
                     
                     // Populate Institutions
                     const institutionSelect = $('#institutionSelect');
                     institutionSelect.empty().append('<option selected disabled>Selecione a instituição</option>');
                     if (data.institutions) {
                         data.institutions.forEach(function(institution) {
                             institutionSelect.append(new Option(institution.name, institution.id));
                         });
                     }
                     const relationWithVictim = $('#relationWithVictim');
                     relationWithVictim.empty().append('<option selected disabled>Selecione o parentesco</option>');
                     if (data.kinships) {
                         data.kinships.forEach(function(kinship) {
                          relationWithVictim.append(new Option(kinship.name, kinship.id));
                         });
                     }
                     // Store polices, hospitals and tribunals for filtering by district
                     window.allPolices = data.polices || [];
                     window.allHospitals = data.hospitals || [];
                     window.allTribunals = data.tribunals || [];
                     
                     // Populate Third Party Opinion (using statuses)
                     const thirdPartyOpinionSelect = $('#thirdPartyOpinionSelect');
                     thirdPartyOpinionSelect.empty().append('<option selected disabled>Selecione o parecer</option>');
                     if (data.statuses) {
                         data.statuses.forEach(function(status) {
                             thirdPartyOpinionSelect.append(new Option(status.name, status.id));
                         });
                     }
                     
                     // Store report types for later use
                     window.reportTypes = data.report_types || [];
                     
                     // After loading all options, populate the form with report data
                    //  populateReport();
                 }
             },
             error: function(xhr, status, error) {
                 console.error('Erro ao buscar opções do formulário:', error);
                 $('#prioritySelect').empty().append('<option selected disabled>Erro ao carregar</option>');
                 $('#statusSelect').empty().append('<option selected disabled>Erro ao carregar</option>');
                 $('#healthStatusSelect').empty().append('<option selected disabled>Erro ao carregar</option>');
                 $('#kinshipSelect').empty().append('<option selected disabled>Erro ao carregar</option>');
                 $('#institutionSelect').empty().append('<option selected disabled>Erro ao carregar</option>');
             }
         });
     } else {
         console.error('Token de autenticação não encontrado.');
         $('#prioritySelect').empty().append('<option selected disabled>Não autorizado</option>');
         $('#statusSelect').empty().append('<option selected disabled>Não autorizado</option>');
     }
     
     // Filter districts when province is selected
     $('#provinceSelect').on('change', function() {
         const selectedProvinceId = $(this).val();
         const districtSelect = $('#districtSelect');
         districtSelect.empty().append('<option value="">Selecione o distrito</option>');
         
         if (selectedProvinceId && window.allDistricts) {
             const filteredDistricts = window.allDistricts.filter(function(district) {
                 return district.province_id == selectedProvinceId;
             });
             
             filteredDistricts.forEach(function(district) {
                 districtSelect.append(new Option(district.name, district.id));
             });
         }
     });
     
     // Update currentDistrictId when district is selected and filter third party options
     $('#districtSelect').on('change', function() {
         currentDistrictId = $(this).val() ? Number($(this).val()) : null;
         // Update third party options if a third party type is already selected
         const thirdPartyType = $('#thirdPartySelect').val();
         if (thirdPartyType && currentDistrictId) {
             updateThirdPartyOptions();
         }
     });
     
     // Function to update third party options based on selected district
     function updateThirdPartyOptions() {
         const selectedDistrictId = currentDistrictId;
         const thirdPartyType = $('#thirdPartySelect').val();
         
         if (!selectedDistrictId) {
             // Show message if district is not selected
             if (thirdPartyType === '1') {
                 $('#policeSelect').empty().append('<option disabled>Selecione primeiro o distrito</option>');
             }
             if (thirdPartyType === 'hospital') {
                 $('#hospitalSelect').empty().append('<option disabled>Selecione primeiro o distrito</option>');
             }
             return;
         }
         
         // Filter and populate polices by district
         if (thirdPartyType === '1' && window.allPolices) {
             const policeSelect = $('#policeSelect');
             policeSelect.empty().append('<option selected disabled>Selecione a esquadra</option>');
             
             // Check if polices have district information for filtering
             let filteredPolices = window.allPolices;
             if (selectedDistrictId && window.allPolices.length > 0 && window.allPolices[0].district) {
                 filteredPolices = window.allPolices.filter(function(police) {
                     return police.district && police.district.id == selectedDistrictId;
                 });
             }
             
             if (filteredPolices.length > 0) {
                 filteredPolices.forEach(function(police) {
                     policeSelect.append(new Option(police.name, police.id));
                 });
             } else {
                 policeSelect.append('<option disabled>Nenhuma esquadra encontrada neste distrito</option>');
             }
         }
         
         // Filter and populate hospitals by district
         if (thirdPartyType === '2' && window.allHospitals) {
             const hospitalSelect = $('#hospitalSelect');
             hospitalSelect.empty().append('<option selected disabled>Selecione o hospital</option>');
             
             const filteredHospitals = window.allHospitals.filter(function(hospital) {
                 return hospital.district && hospital.district.id == selectedDistrictId;
             });
             
             if (filteredHospitals.length > 0) {
                 filteredHospitals.forEach(function(hospital) {
                     hospitalSelect.append(new Option(hospital.name, hospital.id));
                 });
             } else {
                 hospitalSelect.append('<option disabled>Nenhum hospital encontrado neste distrito</option>');
             }
         }
         
         // Populate tribunals (might not have district filtering)
         if (thirdPartyType === '3' && window.allTribunals) {
             const tribunalSelect = $('#tribunalSelect');
             tribunalSelect.empty().append('<option selected disabled>Selecione o tribunal</option>');
             
             window.allTribunals.forEach(function(tribunal) {
                 tribunalSelect.append(new Option(tribunal.name, tribunal.id));
             });
         }
     }
     
     // Update third party options when third party type changes
     $('#thirdPartySelect').on('change', function() {
         const value = this.value;
         const detailsDiv = document.getElementById('thirdPartyDetails');
         
         // Hide all third party option divs
         document.getElementById('policeStationDiv').style.display = 'none';
         document.getElementById('hospitalDiv').style.display = 'none';
         document.getElementById('courtDiv').style.display = 'none';
         
         if (value) {
             detailsDiv.style.display = 'block';
             
             // Show the correct option div
             if(value === 'policia') {
                 document.getElementById('policeStationDiv').style.display = 'block';
                 updateThirdPartyOptions();
             }
             if(value === 'hospital') {
                 document.getElementById('hospitalDiv').style.display = 'block';
                 updateThirdPartyOptions();
             }
             if(value === 'tribunal') {
                 document.getElementById('courtDiv').style.display = 'block';
                 updateThirdPartyOptions();
             }
             
             // SweetAlert informativa
             Swal.fire({
                 icon: 'info',
                 title: 'Atenção!',
                 text: 'A denúncia só poderá ser finalizada após o preenchimento do parecer pelo terceiro indicado. Um e-mail ou SMS será enviado para o contato do terceiro.',
                 confirmButtonText: 'Entendido'
             });
         } else {
             detailsDiv.style.display = 'none';
         }
     });


// Evento de submissão
$("form#reportForm").submit(function(e) {
    e.preventDefault();

    var formData = new FormData(this);
    var title = $('#title').val().trim();
    var description = $('#description').val().trim();
    var district_id = $('#districtSelect').val();

    if (title !== "" && description !== "" && district_id !== "") {
 
        $.ajax({
            url: '{{ env("API_AUDIO_REPORT") }}',
            dataType: 'json',
            type: 'POST',
            data: formData,
            beforeSend: function () {
                $('#submitCaseBtn').prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-2"></span> Enviando...');
            },
            complete: function () {
                $('#submitCaseBtn').prop('disabled', false).html('Enviar Denúncia');
            },
            error: function () {
                Swal.fire('Erro', 'Erro de conexão com o servidor', 'error');
                $('#submitCaseBtn').prop('disabled', false).html('Enviar Denúncia');
                return false;
            },
            success: function (data) {
                if (data && (data.status === 200 || data.status === 201 || data.estado)) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso!',
                        text: data.mensagem || 'Denúncia e áudio enviados com sucesso!',
                        confirmButtonText: 'OK'
                    }).then(function () {
                        $("form#reportForm")[0].reset();
                        clearAudio();
                        // window.location.href = '/alguma-pagina-de-sucesso';
                    });
                } else {
                    Swal.fire('Erro', data.error || data.mensagem || 'Falha ao enviar a denúncia', 'error');
                }
                return false;
            },
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'Authorization': `Bearer ${localStorage.getItem('auth_token')}`
            }
        });
    } else {
        Swal.fire('Atenção', 'Título, descrição e distrito são obrigatórios', 'warning');
    }
});
    });


</script>
@endpush