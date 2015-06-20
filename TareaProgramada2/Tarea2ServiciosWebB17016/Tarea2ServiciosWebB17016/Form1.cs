using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Tarea2ServiciosWebB17016
{
    public partial class Entrada : Form
    {

        private Servicio.ECCI_HolaMundoPortClient servicio;

        public Entrada()
        {
            InitializeComponent();
            servicio = new Servicio.ECCI_HolaMundoPortClient();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void Saludar_Click(object sender, EventArgs e)
        {
            MessageBox.Show(servicio.salude(Texto.Text));
        }

        private void Ultimo_Click(object sender, EventArgs e)
        {
            MessageBox.Show(servicio.ultimoSaludo());
        }
    }
}
