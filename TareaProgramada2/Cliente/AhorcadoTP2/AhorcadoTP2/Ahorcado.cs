using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace AhorcadoTP2
{
    public partial class Ahorcado : Form
    {

        private AhorcadoTP2.AhorcadoReference.Juego_AhorcadoPortClient ws;
        private String nombre;
        private int intentos;
        private String estadoAnterior;                                       // Guarda el estado anterior de la palabra oculta
        private PantallaPuntajes pantallaPuntajes;
        private System.Net.CookieContainer cookies;

        public Ahorcado()
        {
            nombre = Microsoft.VisualBasic.Interaction.InputBox(null, "Escriba su nombre");
            intentos = 8;
            InitializeComponent();
            ws = new AhorcadoReference.Juego_AhorcadoPortClient();
            cookies = new System.Net.CookieContainer();
            pantallaPuntajes = new PantallaPuntajes();
            palabraOculta.Paste(ws.getPalabraOculta());
            estadoAnterior = palabraOculta.Text;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (!letra.Text.Equals("") || letra.Text.Length > 1)
            {
                palabraOculta.Clear();
                palabraOculta.Paste(ws.juego(letra.Text));
                if (ws.verificarJuego().Equals("gano"))
                {
                    MessageBox.Show("¡Ganó!");
                    ws.guardarPuntaje(nombre);
                }
                else
                {
                    /*Mostrar imagen*/
                    if (estadoAnterior.Equals(ws.getPalabraOculta()))
                    {
                        imagen.Image = Image.FromFile(@"images\" + intentos + ".bmp");
                        imagen.Show();
                        intentos--;
                        if (intentos == 0)
                        {
                            MessageBox.Show("¡Perdió!");
                        }

                    }
                }
                estadoAnterior = palabraOculta.Text;

            }
            else
            {
                MessageBox.Show("Por favor digite la letra a adivinar");
            }
            letra.Clear();
        }

        private void puntajes_Click(object sender, EventArgs e)
        {
            pantallaPuntajes.getPuntajesBox().Paste(ws.getMejores());
            pantallaPuntajes.Show();
        }
    }
}
