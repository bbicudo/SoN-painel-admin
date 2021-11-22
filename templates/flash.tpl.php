var status = "<?php echo $data['type']; ?>"

if(status == "success"){
    Swal.fire({
        icon: status,
        title: 'Sucesso!',
        text: '<?php echo $data['message']; ?>',
        heightAuto: false
    })
}else if(status == "warning"){
    Swal.fire({
        icon: status,
        title: 'Aviso!',
        text: '<?php echo $data['message']; ?>',
        heightAuto: false
    })
}else{
    Swal.fire({
        icon: status,
        title: 'Erro!',
        text: '<?php echo $data['message']; ?>',
        heightAuto: false
    })
}