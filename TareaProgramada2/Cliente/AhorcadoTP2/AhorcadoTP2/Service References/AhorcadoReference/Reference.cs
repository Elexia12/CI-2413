﻿//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by a tool.
//     Runtime Version:4.0.30319.34209
//
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace AhorcadoTP2.AhorcadoReference {
    
    
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    [System.ServiceModel.ServiceContractAttribute(Namespace="urn:Juego_Ahorcado", ConfigurationName="AhorcadoReference.Juego_AhorcadoPort")]
    public interface Juego_AhorcadoPort {
        
        [System.ServiceModel.OperationContractAttribute(Action="urn:Juego_Ahorcado#Ahorcado#getTiempo", ReplyAction="*")]
        [System.ServiceModel.XmlSerializerFormatAttribute(Style=System.ServiceModel.OperationFormatStyle.Rpc, SupportFaults=true, Use=System.ServiceModel.OperationFormatUse.Encoded)]
        [return: System.ServiceModel.MessageParameterAttribute(Name="tiempoTotal")]
        int getTiempo();
        
        [System.ServiceModel.OperationContractAttribute(Action="urn:Juego_Ahorcado#Ahorcado#getTiempo", ReplyAction="*")]
        [return: System.ServiceModel.MessageParameterAttribute(Name="tiempoTotal")]
        System.Threading.Tasks.Task<int> getTiempoAsync();
        
        [System.ServiceModel.OperationContractAttribute(Action="urn:Juego_Ahorcado#Ahorcado#getPalabraOculta", ReplyAction="*")]
        [System.ServiceModel.XmlSerializerFormatAttribute(Style=System.ServiceModel.OperationFormatStyle.Rpc, SupportFaults=true, Use=System.ServiceModel.OperationFormatUse.Encoded)]
        [return: System.ServiceModel.MessageParameterAttribute(Name="palabraOculta")]
        string getPalabraOculta();
        
        [System.ServiceModel.OperationContractAttribute(Action="urn:Juego_Ahorcado#Ahorcado#getPalabraOculta", ReplyAction="*")]
        [return: System.ServiceModel.MessageParameterAttribute(Name="palabraOculta")]
        System.Threading.Tasks.Task<string> getPalabraOcultaAsync();
        
        [System.ServiceModel.OperationContractAttribute(Action="urn:Juego_Ahorcado#Ahorcado#juego", ReplyAction="*")]
        [System.ServiceModel.XmlSerializerFormatAttribute(Style=System.ServiceModel.OperationFormatStyle.Rpc, SupportFaults=true, Use=System.ServiceModel.OperationFormatUse.Encoded)]
        [return: System.ServiceModel.MessageParameterAttribute(Name="palabraOculta")]
        string juego(string letra);
        
        [System.ServiceModel.OperationContractAttribute(Action="urn:Juego_Ahorcado#Ahorcado#juego", ReplyAction="*")]
        [return: System.ServiceModel.MessageParameterAttribute(Name="palabraOculta")]
        System.Threading.Tasks.Task<string> juegoAsync(string letra);
        
        [System.ServiceModel.OperationContractAttribute(Action="urn:Juego_Ahorcado#Ahorcado#verificarJuego", ReplyAction="*")]
        [System.ServiceModel.XmlSerializerFormatAttribute(Style=System.ServiceModel.OperationFormatStyle.Rpc, SupportFaults=true, Use=System.ServiceModel.OperationFormatUse.Encoded)]
        [return: System.ServiceModel.MessageParameterAttribute(Name="resultado")]
        string verificarJuego();
        
        [System.ServiceModel.OperationContractAttribute(Action="urn:Juego_Ahorcado#Ahorcado#verificarJuego", ReplyAction="*")]
        [return: System.ServiceModel.MessageParameterAttribute(Name="resultado")]
        System.Threading.Tasks.Task<string> verificarJuegoAsync();
        
        [System.ServiceModel.OperationContractAttribute(Action="urn:Juego_Ahorcado#Ahorcado#guardarPuntaje", ReplyAction="*")]
        [System.ServiceModel.XmlSerializerFormatAttribute(Style=System.ServiceModel.OperationFormatStyle.Rpc, SupportFaults=true, Use=System.ServiceModel.OperationFormatUse.Encoded)]
        [return: System.ServiceModel.MessageParameterAttribute(Name="guardo")]
        bool guardarPuntaje(string nombre);
        
        [System.ServiceModel.OperationContractAttribute(Action="urn:Juego_Ahorcado#Ahorcado#guardarPuntaje", ReplyAction="*")]
        [return: System.ServiceModel.MessageParameterAttribute(Name="guardo")]
        System.Threading.Tasks.Task<bool> guardarPuntajeAsync(string nombre);
        
        [System.ServiceModel.OperationContractAttribute(Action="urn:Juego_Ahorcado#Ahorcado#getMejores", ReplyAction="*")]
        [System.ServiceModel.XmlSerializerFormatAttribute(Style=System.ServiceModel.OperationFormatStyle.Rpc, SupportFaults=true, Use=System.ServiceModel.OperationFormatUse.Encoded)]
        [return: System.ServiceModel.MessageParameterAttribute(Name="puntajes")]
        string getMejores();
        
        [System.ServiceModel.OperationContractAttribute(Action="urn:Juego_Ahorcado#Ahorcado#getMejores", ReplyAction="*")]
        [return: System.ServiceModel.MessageParameterAttribute(Name="puntajes")]
        System.Threading.Tasks.Task<string> getMejoresAsync();
    }
    
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    public interface Juego_AhorcadoPortChannel : AhorcadoTP2.AhorcadoReference.Juego_AhorcadoPort, System.ServiceModel.IClientChannel {
    }
    
    [System.Diagnostics.DebuggerStepThroughAttribute()]
    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.ServiceModel", "4.0.0.0")]
    public partial class Juego_AhorcadoPortClient : System.ServiceModel.ClientBase<AhorcadoTP2.AhorcadoReference.Juego_AhorcadoPort>, AhorcadoTP2.AhorcadoReference.Juego_AhorcadoPort {
        
        public Juego_AhorcadoPortClient() {
        }
        
        public Juego_AhorcadoPortClient(string endpointConfigurationName) : 
                base(endpointConfigurationName) {
        }
        
        public Juego_AhorcadoPortClient(string endpointConfigurationName, string remoteAddress) : 
                base(endpointConfigurationName, remoteAddress) {
        }
        
        public Juego_AhorcadoPortClient(string endpointConfigurationName, System.ServiceModel.EndpointAddress remoteAddress) : 
                base(endpointConfigurationName, remoteAddress) {
        }
        
        public Juego_AhorcadoPortClient(System.ServiceModel.Channels.Binding binding, System.ServiceModel.EndpointAddress remoteAddress) : 
                base(binding, remoteAddress) {
        }
        
        public int getTiempo() {
            return base.Channel.getTiempo();
        }
        
        public System.Threading.Tasks.Task<int> getTiempoAsync() {
            return base.Channel.getTiempoAsync();
        }
        
        public string getPalabraOculta() {
            return base.Channel.getPalabraOculta();
        }
        
        public System.Threading.Tasks.Task<string> getPalabraOcultaAsync() {
            return base.Channel.getPalabraOcultaAsync();
        }
        
        public string juego(string letra) {
            return base.Channel.juego(letra);
        }
        
        public System.Threading.Tasks.Task<string> juegoAsync(string letra) {
            return base.Channel.juegoAsync(letra);
        }
        
        public string verificarJuego() {
            return base.Channel.verificarJuego();
        }
        
        public System.Threading.Tasks.Task<string> verificarJuegoAsync() {
            return base.Channel.verificarJuegoAsync();
        }
        
        public bool guardarPuntaje(string nombre) {
            return base.Channel.guardarPuntaje(nombre);
        }
        
        public System.Threading.Tasks.Task<bool> guardarPuntajeAsync(string nombre) {
            return base.Channel.guardarPuntajeAsync(nombre);
        }
        
        public string getMejores() {
            return base.Channel.getMejores();
        }
        
        public System.Threading.Tasks.Task<string> getMejoresAsync() {
            return base.Channel.getMejoresAsync();
        }
    }
}
